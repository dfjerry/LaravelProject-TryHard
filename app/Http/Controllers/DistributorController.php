<?php

namespace App\Http\Controllers;
use App\Distributor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function listDistributor()
    {
        //lay tat ca
        $distributor = Distributor::paginate(20);
        //show validation theo ten D%
        //  $category =Category::where ("category_name", "LIKE", "D%")->get();
        return view("distributor.list", ["distributors" => $distributor]);
        //
    }

    public function newDistributor()
    {
        return view("distributor.new");
    }

    public function saveDistributor(Request $request)
    {
        //validate du lieu
        $request->validate([
            "distributor_name" => "required|string|min:6|unique:distributors",
            "address"=>"required|string|min:6",
            "telephone"=>"required|string|min:6",

        ]);
        try {
            // bắt lỗi nếu không có = null
            $logo = null;
            // xử lý để đưa ảnh lên media trong public sau đó lấy nguồn file cho vào biến $product
            if($request->hasFile("logo")){ // nếu request gửi lên có file product_image là inputname
                $file = $request->file("logo"); // trả về 1 đối tượng lấy từ request của input
                // lấy tên file
                // thêm time() để thay đổi thời gian upload ảnh lên để không bị trùng ảnh với nhau
                $allow = ["png","jpg","jpeg","gif"];
                $extName = $file->getClientOriginalExtension();
                if(in_array($extName,$allow)){ // nếu đuôi file gửi lên nằm trong array
                    $fileName = time().$file->getClientOriginalName(); //  lấy tên gốc original của file gửi lên từ client
                    $file->move(public_path("media"),$fileName); // đẩy file vào thư mục media với tên là fileName
                    //convert string to ProductImage
                    $logo = "media/".$fileName; // lấy nguồn file
                }
            }
//tự động cập nhật thời gian cho category
            Distributor::create([
                "distributor_name" => $request->get("distributor_name"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone"),
                "logo" =>$logo
            ]);

            // "updated_at"=>Carbon::now(),
            //            DB::table("categories") ->insert([
//                "category_name" =>$request->get("category_name"),
//                "created_at"=>Carbon::now(),
//
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-distributor");
    }

    public function editDistributor($id)
    {
        $distributor = Distributor::findOrFail($id);

//            abort(404); =findOrFail
        return view("distributor.edit", ["distributor" => $distributor]);
    }

    public function updateDistributor($id, Request $request)
    {
        $distributor = Distributor::findOrFail($id);
        $request->validate([
            "distributor_name" => "required|min:6|unique:distributors,distributor_name,{$id}"
        ]);
        try {
            $logo = $distributor->get("logo");
            // xử lý để đưa ảnh lên media trong public sau đó lấy nguồn file cho vào biến $product
            if($request->hasFile("logo")){ // nếu request gửi lên có file product_image là inputname
                $file = $request->file("logo"); // trả về 1 đối tượng lấy từ request của input
                // lấy tên file
                // thêm time() để thay đổi thời gian upload ảnh lên để không bị trùng ảnh với nhau
                $allow = ["png","jpg","jpeg","gif"];
                $extName = $file->getClientOriginalExtension();
                if(in_array($extName,$allow)){ // nếu đuôi file gửi lên nằm trong array
                    $fileName = time().$file->getClientOriginalName(); //  lấy tên gốc original của file gửi lên từ client
                    $file->move(public_path("media"),$fileName); // đẩy file vào thư mục media với tên là fileName
                    $logo = "media/".$fileName; // lấy nguồn file
                }
            }
            $distributor->update([
                "distributor_name" => $request->get("distributor_name"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone"),
                "logo" => $logo
            ]);
        } catch (\Exception $exception) {
//            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("/list-distributor");
    }

    public function deleteDistributor($id)
    {
        $distributors = Distributor::findOrFail($id);
        try {
            $distributors->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-distributor");
    }
}
