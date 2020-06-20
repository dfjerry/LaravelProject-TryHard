<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view("frontend.blog");
    }

    public function newBlog(){
        return view("blog.new");
    }

    public function listBlog(){
        $blog = Blog::all();
        return view("blog.list", [
            "blog" => $blog
        ]);
    }

    public function saveBlog(Request $request){
        $request->validate([
            "title" => "required|string|min:6|unique:blog"
        ]);
        try {
            $blogImage = null;
            // đưa ảnh vào media
            if ($request->hasFile("blog_image")) {
                $file = $request->file("blog_image");
                $allow = ["png", "jpg", "jpeg", "gif"];
                $extName = $file->getClientOriginalExtension();
                if (in_array($extName, $allow)) {
                    $fileName = time() . $file->getClientOriginalName();
                    $file->move(public_path("media"), $fileName);
                    $blogImage = "media/" . $fileName;
                }
            }
            Blog::create([
                "title" => $request->get("title"),
                "blog_image" =>$blogImage,
                "author" => $request->get("author"),
                "date_post" => $request->get("date_post"),
                "blog_desc" => $request->get("blog_desc"),
                "blog_content" => $request->get("blog_content")
            ]);
        }catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-blog");
    }

    public function editBlog($id){
        $blog = Blog::findOrFail($id);
        return view("blog.edit", [
           "blog" => $blog
        ]);
    }

    public function updateBlog($id, Request $request){
        $blog = Blog::findOrFail();
        $request->validate([
            "title" =>  "required|min:6|unique:blog,title,{$id}"
        ]);
        try {
            $blogImage = $blog->get("blog_image");
            // xử lý để đưa ảnh lên media trong public sau đó lấy nguồn file cho vào biến $product
            if($request->hasFile("blog_image")) { // nếu request gửi lên có file product_image là inputname
                $file = $request->file("blog_image"); // trả về 1 đối tượng lấy từ request của input
                // lấy tên file
                // thêm time() để thay đổi thời gian upload ảnh lên để không bị trùng ảnh với nhau
                $allow = ["png", "jpg", "jpeg", "gif"];
                $extName = $file->getClientOriginalExtension();
                if (in_array($extName, $allow)) { // nếu đuôi file gửi lên nằm trong array
                    $fileName = time() . $file->getClientOriginalName(); //  lấy tên gốc original của file gửi lên từ client
                    $file->move(public_path("media"), $fileName); // đẩy file vào thư mục media với tên là fileName
                    //convert string to brandImage
                    $blogImage = "media/" . $fileName; // lấy nguồn file
//                    dd($brandImage);
                }
                $blog->update([
                    "title" => $request->get("title"),
                    "blog_image" =>$blogImage,
                    "author" => $request->get("author"),
                    "date_post" => $request->get("date_post"),
                    "blog_desc" => $request->get("blog_desc"),
                    "blog_content" => $request->get("blog_content")
                ]);
            }
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-blog");
    }

    public function deteleBlog($id){
        $blog = Blog::findOrFail($id);
        try{
            $blog->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-blog");
    }
}
