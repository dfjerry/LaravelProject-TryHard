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
            Blog::create([
                "title" => $request->get("title"),
                "blog_image" =>$request->get("blog_image"),
                "blog_image1" => $request->get("blog_image1"),
                "blog_image2" => $request->get("blog_image2"),
                "blog_image3" => $request->get("blog_image3"),
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
        $blog = Blog::findOrFail($id);
        $request->validate([
            "title" =>  "required|min:6|unique:blog,title,{$id}"
        ]);
        try {
                $blog->update([
                    "title" => $request->get("title"),
                    "blog_image" =>$request->get("blog_image"),
                    "blog_image1" => $request->get("blog_image1"),
                    "blog_image2" => $request->get("blog_image2"),
                    "blog_image3" => $request->get("blog_image3"),
                     "author" => $request->get("author"),
                    "date_post" => $request->get("date_post"),
                    "blog_desc" => $request->get("blog_desc"),
                    "blog_content" => $request->get("blog_content")
                ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-blog");
    }

    public function deleteBlog($id){
        $blog = Blog::findOrFail($id);
        try{
            $blog->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-blog");
    }
}
