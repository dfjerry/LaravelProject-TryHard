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
    public function newProduct(){
        // phai lay du lieu tu cac bang phu
        $category = Category::all();
        $brand = Brand::all();
        return view("product.new",[
                "categories"=>$category,
                "brands" => $brand,
            ]
        );
    }
    public function saveProduct(Request $request){ // tạo biến request lưu dữ liệu người dùng gửi lên ở body
        // đầu tiên phải validate dữ liệu cả bên html và bên sever
        // cách validate
        $request->validate([
            "product_name" => "required|string|min:3|unique:products",
            "product_desc" => "required|string|min:2|unique:products",
            "price" => "required|int",
            "qty" => "required|int"
        ]);
        try {
            Product::create([
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
    public function deleteProduct($id){
        $product = Product::findorFail($id);
        try {
            $product->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/list-product");
    }

    public function editProduct($id){
        $category = Category::all();
        $brand = Brand::all();
        $product = Product::findOrFail($id);
        return view("product.edit",[
            "categories"=>$category,
            "brands" => $brand,
            "product" => $product]);
    }
    public function updateProduct($id,Request $request){
        $product = Product::findOrFail($id);
        $request->validate([ // unique voi categories(table) category_name(truong muon unique), (id khong muon bi unique)
            "product_name" => "required|min:3|unique:products,product_name,{$id}"
        ]);
        try{
            $product->update([
                "product_name" => $request->get("product_name"),
                "product_desc" => $request->get("product_desc"),
                "price" => $request->get("price"),
                "qty" => $request->get("qty"),
                "category_id" => $request->get("category_id"),
                "brand_id" => $request->get("brand_id"),
            ]);
        }catch(Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/list-product");
    }

    //brand
    //brand
    public function listBrand(){
        $brand = Brand::paginate();
        return view ("brand.list",[
            "brands" =>$brand]);
        //
    }
    public function newBrand(){
        return view ("brand.new");
    }
    public function saveBrand(Request $request){
        //validate du lieu
        $request->validate([
            "brand_name" =>"required|string|min:6|unique:brands"
        ]);
        try {
            Brand::create([
                "brand_name"=>$request->get("brand_name")
            ]);
        } catch (\Exception $exception){
            return redirect() ->back();
        }
        return redirect()->to("/list-brand");
    }
    public function editBrand($id){
        $brand = Brand::findOrFail($id);
//        if (is_null($brand))
//            abort(404); =findOrFail
        return view("brand.edit", ["brand"=>$brand]);
    }
    public function updateBrand($id, Request $request){
        $brand = Brand::findOrFail($id);
        $request->validate([
            "brand_name" =>"required|min:6|unique:brands,brand_name,{$id}"
        ]);
        // die("loi");
        //      dd($request->all());
        try {
            $brand->update([
                "brand_name"=>$request->get("brand_name")
            ]);
        }catch (\Exception $exception){
            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("/list-brand");
    }
    public function deleteBrand($id)
    {
        $brand = Brand::findOrFail($id);
        try {
            $brand->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-brand");
    }
}
