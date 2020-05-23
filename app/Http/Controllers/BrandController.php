<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //brand Controller

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
