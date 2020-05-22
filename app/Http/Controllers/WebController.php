<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("home");
    }
    public function listCategory(){
        return view("category.list");
    }

    //product Controller
    public function listProduct(){
        $product = Product::paginate(20);
        return view("product.list",["products"=>$product]); // string la mang cac product bien duoc gui sang lam bien dau tien cua forech
    }
    public function saveProduct(Request $request){ // tạo biến request lưu dữ liệu người dùng gửi lên ở body
        // đầu tiên phải validate dữ liệu cả bên html và bên sever
        // cách validate
        $category = Category::all();
        $brand = Brand::all();
        $request->validate([
            "brand_name" => "required|string|min:3|unique:brands"
        ]);
        try {
            Product::create([
                "categories"=>$category,
                "brands" => $brand,
                "product_name" => $request->get("product_name"),
                "product_desc" => $request->get("product_desc"),
                "price" => $request->get("price"),
                "qty" => $request->get("qty"),
                "category_id" => $request->get("category_id"),
                "brand_id" => $request->get("brand_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/list-product");
    }
    public function newProduct(){
        // phai lay du lieu tu cac bang phu
//        $products = Product::all();
        $category = Category::all();
        $brand = Brand::all();
        return view("product.new",[
                "categories"=>$category,
                "brands" => $brand,
            ]
        );
    }
    public function deleteProduct($id){
        $product = Product::findorFail($id);
        try {
            $product->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/list-product");
    }
}
