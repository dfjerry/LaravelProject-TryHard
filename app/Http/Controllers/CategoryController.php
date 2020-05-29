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
        $category = Category::paginate();
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
//tự động cập nhật thời gian cho category
            Category::create([
                "category_name" => $request->get("category_name")
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-category");
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
            $category->update([
                "category_name" => $request->get("category_name")
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("admin/list-category");
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-category");
    }

}
