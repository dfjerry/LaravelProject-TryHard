<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

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
//        foreach ($category as $p){
//            $slug = \Illuminate\Support\Str::slug($p->__get("category_name"));
//            $p->slug = $slug.$p->__get("id");// luu lai vao DB
//            $p->save();
//            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
//        }
        //Tạo slug product
        $products = Product::all();
        $most_viewer = Product::orderBy("view_count","DESC")->limit(8)->get();
//        foreach ($products as $p){
//            $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
//            $p->slug = $slug.$p->__get("id");// luu lai vao DB
//            $p->save();
//            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
//        }
        $categories = Category::orderBy("created_at","ASC")->get();
        return view("frontend.home",[
            "categories"=>$categories,
            "products"=>$products,
            "most_viewer" => $most_viewer,
        ]);
    }

    public function category(Category $category){
//        $products = Product::where("category_id",$category->__get("id"))->paginate(12);
        $products = $category->Products()->simplePaginate(12);
        // dung trong model de lay tat ca\
        return view("frontend.category",[
            "category"=>$category,
//            "categories"=>$categories// tra ve category trong front end
            "products"=>$products
        ]);
    }

    public function product(Product $product){
        if(!session()->has("view_count_{$product->__get("id")}")){// kiểm tra xem sesion  nếu chưa có sẽ đăng lên
            $product->increment("view_count");     // tự tăng lên 1 mỗi lần user ấn vào xem sản phẩm
            session(["view_count{$product->__get("id")} => true"]);// lấy session ra 1 session sẽ có giá trị lưu giữ trong vòng 2 tiếng
        }
        $relativeProducts = Product::with("Category")->paginate(4);//nạp sẵn phần cần nạp trong collection, lấy theo kiểu quan hệ
        return view("frontend.product", [
            "product"=>$product,
            "relativeProduct"=>$relativeProducts,
        ]);
    }
    ///asdsad
    public function postSearch(Request $request){
        $searchProducts = Product::where("product_name","like","%".$request->search."%");
        return view("frontend.search",[
            "searchProducts" => $searchProducts,
        ]);
    }
    public function about(Request $request){
        return view("frontend.about");
    }
    public function contact(Request $request){
        return view("frontend.contact");
    }
    public function myaccount(Request $request){
        return view("frontend.myaccount");
    }
}
