<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //brand Controller


    public function listBrand()
    {
        //lay tat ca
        $brand = Brand::paginate(20);
        //show validation theo ten D%
        //  $category =Category::where ("category_name", "LIKE", "D%")->get();
        return view("brand.list", ["brands" => $brand]);
        //
    }

    public function newBrand()
    {
        return view("brand.new");
    }

    public function saveBrand(Request $request)
    {
        //validate du lieu
        $request->validate([
            "brand_name" => "required|string|min:6|unique:brands"
        ]);
        try {
            // bắt lỗi nếu không có = null
            $brandImage = null;
            // xử lý để đưa ảnh lên media trong public sau đó lấy nguồn file cho vào biến $product
            if($request->hasFile("brand_image")){ // nếu request gửi lên có file product_image là inputname
                $file = $request->file("brand_image"); // trả về 1 đối tượng lấy từ request của input
                // lấy tên file
                // thêm time() để thay đổi thời gian upload ảnh lên để không bị trùng ảnh với nhau
                $allow = ["png","jpg","jpeg","gif"];
                $extName = $file->getClientOriginalExtension();
                if(in_array($extName,$allow)){ // nếu đuôi file gửi lên nằm trong array
                    $fileName = time().$file->getClientOriginalName(); //  lấy tên gốc original của file gửi lên từ client
                    $file->move(public_path("media"),$fileName); // đẩy file vào thư mục media với tên là fileName
                    //convert string to ProductImage
                    $brandImage = "media/".$fileName; // lấy nguồn file
                }
            }
//tự động cập nhật thời gian cho category
            Brand::create([
                "brand_name" => $request->get("brand_name"),
                "brand_image" =>$brandImage
            ]);

            // "updated_at"=>Carbon::now(),
            //            DB::table("categories") ->insert([
//                "category_name" =>$request->get("category_name"),
//                "created_at"=>Carbon::now(),
//
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-brand");
    }

    public function editBrand($id)
    {
        $brand = Brand::findOrFail($id);
//        if (is_null($brand))
//            abort(404); =findOrFail
        return view("brand.edit", ["brand" => $brand]);
    }

    public function updateBrand($id, Request $request)
    {
        $brand = Brand::findOrFail($id);
        $request->validate([
            "brand_name" => "required|min:6|unique:brands,brand_name,{$id}"
        ]);
//         die("loi");
//              dd($brand);
        try {
            // bắt lỗi nếu không có = null
//            $brandImage = $request->get("brand_image");
            $brandImage = $brand->get("brand_image");
            // xử lý để đưa ảnh lên media trong public sau đó lấy nguồn file cho vào biến $product
            if($request->hasFile("brand_image")){ // nếu request gửi lên có file product_image là inputname
                $file = $request->file("brand_image"); // trả về 1 đối tượng lấy từ request của input
                // lấy tên file
                // thêm time() để thay đổi thời gian upload ảnh lên để không bị trùng ảnh với nhau
                $allow = ["png","jpg","jpeg","gif"];
                $extName = $file->getClientOriginalExtension();
                if(in_array($extName,$allow)){ // nếu đuôi file gửi lên nằm trong array
                    $fileName = time().$file->getClientOriginalName(); //  lấy tên gốc original của file gửi lên từ client
                    $file->move(public_path("media"),$fileName); // đẩy file vào thư mục media với tên là fileName
                    //convert string to brandImage
                    $brandImage = "media/".$fileName; // lấy nguồn file
//                    dd($brandImage);
                }
            }
            $brand->update([
                "brand_name" => $request->get("brand_name"),
                "brand_image" => $brandImage
            ]);
        } catch (\Exception $exception) {
//            dd($exception->getMessage());
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
