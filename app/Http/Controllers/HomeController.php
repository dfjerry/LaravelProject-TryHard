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

        // $category1 = Product::all();
//        foreach ($category1 as $p){
//            $slug = \Illuminate\Support\Str::slug($p->__get("category_name"));
//            $p->slug = $slug.$p->__get("id");// luu lai vao DB
//            $p->save();
//            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
//        }
//        dd($products);
        foreach ($products as $p){
            $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
            $p->slug = $slug.$p->__get("id");// luu lai vao DB
            $p->save();
            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
        }
        $categories = Category::orderBy("created_at","ASC")->get();
        return view("frontend.home",[
            "categories"=>$categories,
            "products"=>$products,
        ]);
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
        $product = Product::all()->paginate(10);
        return view("frontend.product",[
            "product"=>$product,
        ]);
    }
}
