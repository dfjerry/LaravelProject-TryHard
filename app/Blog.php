<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";

    public $fillable = [
        "title",
        "slug",
        "blog_image",
        "blog_image1",
        "blog_image2",
        "blog_image3",
        "author",
        "date_post",
        "blog_desc",
        "blog_content"
    ];

    public function getImage(){
        if(is_null($this->__get("blog_image"))){
            return asset("media/default.jpg");
        }
        return asset($this->__get("blog_image"));
    }
    public function getBlogUrl(){
        return url("/blogdetail/{$this->__get("slug")}");
    }
    public function getSlug(){
        return $this->__get("slug");
    }
}
