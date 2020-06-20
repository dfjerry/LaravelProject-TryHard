<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //product Controller
    public function listProduct(){
        $product = Product::with("Category")->paginate(20);//nạp sẵn phần cần nạp trong collection
        return view("product.list",["products"=>$product]); // string la mang cac product bien duoc gui sang lam bien dau tien cua forech
    }
    public function newProduct(){
        // phai lay du lieu tu cac bang phu
        $category = Category::all();
        return view("product.new",[
                "categories"=>$category
            ]
        );
    }
    public function saveProduct(Request $request){ // tạo biến request lưu dữ liệu người dùng gửi lên ở body
        // đầu tiên phải validate dữ liệu cả bên html và bên sever
        // cách validate
        $request->validate([
            "product_name"=>"required",
            "product_desc"=>"required",
            "price"=>"required|numeric|min:0",
            "qty"=>"required|numeric|min:1",
            "category_id"=>"required"
        ]);
        try {

            Product::create([
                "product_name"=>$request->get("product_name"),
                "product_image"=>$request->get("product_image"),
                "product_image1"=>$request->get("product_image1"),
                "product_image2"=>$request->get("product_image2"),
                "product_image3"=>$request->get("product_image3"),
                "product_image4"=>$request->get("product_image4"),

                "product_desc"=>$request->get("product_desc"),
                "price"=>$request->get("price"),
                "qty"=>$request->get("qty"),
                "category_id"=>$request->get("category_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-product");
    }

    public function editProduct($id){
        $category = Category::all();
        $product = Product::findOrFail($id);
        return view("product.edit",[
            "categories"=>$category,
            "product" => $product]);
    }
    public function updateProduct($id,Request $request){
        $products = Product::findOrFail($id);
        $request->validate([
            "product_name"=>"required|min:3|unique:products,product_name,($id)",
            "product_desc"=>"required",
            "price"=>"required|numeric|min:0",
            "qty"=>"required|numeric|min:1",
            "category_id"=>"required",
        ]);
        try {


            $products->update([
                "product_name"=>$request->get("product_name"),
                "product_image"=>$request->get("product_image"),
                "product_image1"=>$request->get("product_image1"),
                "product_image2"=>$request->get("product_image2"),
                "product_image3"=>$request->get("product_image3"),
                "product_image4"=>$request->get("product_image4"),
                "product_desc"=>$request->get("product_desc"),
                "price"=>$request->get("price"),
                "qty"=>$request->get("qty"),
                "category_id"=>$request->get("category_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-product");
    }
    public function deleteProduct($id){
        $products = Product::findorFail($id);
        try {
            $products->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-product");
    }
}
