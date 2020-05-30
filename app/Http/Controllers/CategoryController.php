<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Category Controller
    public function listCategory()
    {
        //lay tat ca
        $category = Category::withCount("Products")->paginate(20);
        //show validation theo ten D%
        //  $category =Category::where ("category_name", "LIKE", "D%")->get();
        return view("category.list", [
            "categories" => $category]);
        //
    }

    public function newCategory()
    {
        return view("category.new");
    }

    public function saveCategory(Request $request)
    {
        //validate du lieu
        $request->validate([
            "category_name" => "required|string|min:6|unique:categories"
        ]);
        try {
            $categoryImage = null;
            // xử lý để đưa ảnh lên media trong public sau đó lấy nguồn file cho vào biến $product
            if($request->hasFile("category_image")){ // nếu request gửi lên có file product_image là inputname
                $file = $request->file("category_image"); // trả về 1 đối tượng lấy từ request của input
                // lấy tên file
                // thêm time() để thay đổi thời gian upload ảnh lên để không bị trùng ảnh với nhau
                $allow = ["png","jpg","jpeg","gif"];
                $extName = $file->getClientOriginalExtension();
                if(in_array($extName,$allow)){ // nếu đuôi file gửi lên nằm trong array
                    $fileName = time().$file->getClientOriginalName(); //  lấy tên gốc original của file gửi lên từ client
                    $file->move(public_path("media"),$fileName); // đẩy file vào thư mục media với tên là fileName
                    //convert string to ProductImage
                    $categoryImage = "media/".$fileName; // lấy nguồn file
                }
            }
//tự động cập nhật thời gian cho category
            Category::create([
                "category_name" => $request->get("category_name"),
                "category_image" =>$categoryImage
            ]);

            // "updated_at"=>Carbon::now(),
            //            DB::table("categories") ->insert([
//                "category_name" =>$request->get("category_name"),
//                "created_at"=>Carbon::now(),
//
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-category");
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
//        if (is_null($category))
//            abort(404); =findOrFail
        return view("category.edit", ["category" => $category]);
    }

    public function updateCategory($id, Request $request)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            "category_name" => "required|min:6|unique:categories,category_name,{$id}"
        ]);
        // die("loi");
        //      dd($request->all());
        try {
            $categoryImage = $category->get("category_image");
            // xử lý để đưa ảnh lên media trong public sau đó lấy nguồn file cho vào biến $product
            if($request->hasFile("category_image")){ // nếu request gửi lên có file product_image là inputname
                $file = $request->file("category_image"); // trả về 1 đối tượng lấy từ request của input
                // lấy tên file
                // thêm time() để thay đổi thời gian upload ảnh lên để không bị trùng ảnh với nhau
                $allow = ["png","jpg","jpeg","gif"];
                $extName = $file->getClientOriginalExtension();
                if(in_array($extName,$allow)){ // nếu đuôi file gửi lên nằm trong array
                    $fileName = time().$file->getClientOriginalName(); //  lấy tên gốc original của file gửi lên từ client
                    $file->move(public_path("media"),$fileName); // đẩy file vào thư mục media với tên là fileName
                    //convert string to brandImage
                    $categoryImage = "media/".$fileName; // lấy nguồn file
//                    dd($brandImage);
                }
            }
            $category->update([
                "category_name" => $request->get("category_name"),
                "category_image" =>$categoryImage
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("/admin/list-category");
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-category");
    }
}
