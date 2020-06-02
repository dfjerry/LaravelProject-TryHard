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
        $products = Product::all();
        foreach ($products as $p){
            $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
            $p->slug = $slug.$p->__get("id");// luu lai vao DB
            $p->save();
            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
        }
        return view("frontend.home");
    }

    public function category(Category $category){
//        $products = Product::where("category_id",$category->__get("id"))->paginate(12);
        $products = $category->Products()->paginate(12);
        // dung trong model de lay tat ca\
        return view("frontend.category",[
            "category"=>$category,
//            "categories"=>$categories// tra ve category trong front end
            "products"=>$products
        ]);
    }

    public function product(Product $product){
        $relativeProducts = Product::with("Category")->paginate(4);
        return view("frontend.product",[
            "product"=>$product,
            "relativeProducts"=>$relativeProducts
        ]);
    }
}
