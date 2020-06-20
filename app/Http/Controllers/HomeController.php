<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Events\OrderCreated;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //Tạo slug Categories
         $category = Category::all();
        foreach ($category as $p){
            $slug = \Illuminate\Support\Str::slug($p->__get("category_name"));
            $p->slug = $slug.$p->__get("id");// luu lai vao DB
            $p->save();
            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
        }

        //Tạo slug product
        $products = Product::all();
        $most_viewer = Product::orderBy("view_count", "DESC")->limit(8)->get();
        foreach ($products as $p){
            $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
            $p->slug = $slug.$p->__get("id");// luu lai vao DB
            $p->save();
//            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
      }


        $categories = Category::orderBy("created_at", "ASC")->get();
        return view("frontend.home", [
            "categories" => $categories,
            "products" => $products,
            "most_viewer" => $most_viewer,
        ]);
    }

    public function category(Category $category)
    {
//        $products = Product::where("category_id",$category->__get("id"))->paginate(12);
        $products = $category->Products()->simplePaginate(12);
        // dung trong model de lay tat ca\
        return view("frontend.category", [
            "category" => $category,
//            "categories"=>$categories// tra ve category trong front end
            "products" => $products
        ]);
    }

    public function product(Product $product)
    {
        $category = Category::all();
        if (!session()->has("view_count_{$product->__get("id")}")) {// kiểm tra xem sesion  nếu chưa có sẽ đăng lên
            $product->increment("view_count");     // tự tăng lên 1 mỗi lần user ấn vào xem sản phẩm
            session(["view_count{$product->__get("id")} => true"]);// lấy session ra 1 session sẽ có giá trị lưu giữ trong vòng 2 tiếng
        }
        $relativeProducts = Product::with("Category")->paginate(4);//nạp sẵn phần cần nạp trong collection, lấy theo kiểu quan hệ

        return view("frontend.product", [
            "category" => $category,
            "product" => $product,
            "relativeProduct" => $relativeProducts,
        ]);
    }

    public function postSearch(Request $request)
    {
        $searchProducts = Product::where("product_name", "like", "%" . $request->search . "%");
        return view("frontend.search", [
            "searchProducts" => $searchProducts,
        ]);
    }

    public function about(Request $request)
    {
        return view("frontend.about");
    }

    public function contact(Request $request)
    {
        return view("frontend.contact");
    }

    public function myaccount(Request $request)
    {
        return view("frontend.myaccount");
    }
    public function shop(){

        return view("frontend.shop",[

        ]);
    }
    public function header(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();
        return view("components.frontend.header",[
            "products" => $products,
            "category" => $categories
        ]);
    }


    public function addToCart(Product $product, Request $request)
    {
        $qty = $request->has("qty") && (int)$request->get("qty") > 0 ? (int)$request->get("qty") : 1;
        $myCart = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
        $contain = false;
        if (Auth::check()) {
            if (Cart::where("user_id", Auth::id())->where("is_checkout", true)->exists()) {
                $cart = Cart::where("user_id", Auth::id())->where("is_checkout", true)->first();
            } else {
                $cart = Cart::create([
                    "user_id" => Auth::id(),
                    "is_checkout" => true
                ]);
            }
        }
        foreach ($myCart as $key => $item) {
            if ($item["product_id"] == $product->__get("id")) {
                $myCart[$key]["qty"] += $qty;
                $contain = true;
                if (Auth::check()) {
                    DB::table("cart_product")->where("cart_id", $cart->__get("id"))
                        ->where("product_id", $item["product_id"])
                        ->update(["qty" => $myCart[$key]["qty"]]);
                }
                break;
            }
        }
        if (!$contain) {
            $myCart[] = [
                "product_id" => $product->__get("id"),
                "qty" => $qty
            ];
            if (Auth::check()) {
                DB::table("cart_product")->insert([
                    "qty" => $qty,
                    "cart_id" => $cart->__get("id"),
                    "product_id" => $product->__get("id")
                ]);
            }
        }
        session(["my_cart" => $myCart]);

        return redirect()->to("/shopping-cart");
    }

    public function shoppingCart()
    {
        $myCart = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
        $productIds = [];
        foreach ($myCart as $item) {
            $productIds[] = $item["product_id"];
        }
        $grandTotal = 0;
        $products = Product::find($productIds);
        foreach ($products as $p) {
            foreach ($myCart as $item) {
                if ($p->__get("id") == $item["product_id"]) {
                    $grandTotal += ($p->__get("price") * $item["qty"]);
                    $p->cart_qty = $item["qty"];
                }
            }
        }
        return view("frontend.cart", [
            "products" => $products,
            "grandTotal" => $grandTotal
        ]);
    }

    public function checkout()
    {
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", true)
            ->with("getItems")
            ->firstOrFail();
        return view("frontend.checkout", [
            "cart" => $cart
        ]);

    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            "username" => "required",
            "address" => "required",
            "telephone" => "required",
        ]);
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", true)
            ->with("getItems")
            ->firstOrFail();
        $grandTotal = 0;

        foreach ($cart->getItems as $item) {
            $grandTotal += $item->pivot->__get("qty") * $item->__get("price");
        }
        try {
            $order = Order::create([
                "user_id" => Auth::id(),
                "username" => $request->get("username"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone"),
                "note" => $request->get("note"),
                "grand_total" => $grandTotal,
                "status" => Order::PENDING
            ]);
//            die("done");
            foreach ($cart->getItems as $item) {
                DB::table("orders_products")->insert([
                    "order_id" => $order->__get("id"),
                    "product_id" => $item->__get("id"),
                    "price" => $item->__get("price"),
                    "qty" => $item->pivot->__get("qty")
                ]);
            }
//            die("done");
            $currentUser = Auth::user();
            $order = Order::where("user_id", Auth::id())->firstOrFail();
            Mail::send('mail.checkout-form',["cart" => $cart->getItems,"user" => $currentUser,"order" => $order],function ($message){
                $message->to(Auth::user()->__get("email"),Auth::user()->__get("name"))->subject('TeaCozy Đơn Hàng Khách Hàng '.Auth::user()->__get("name"));
            });
            event(new OrderCreated($order));
        } catch (\Exception $exception) {

        }
        return redirect()->to("/home");
    }
}
