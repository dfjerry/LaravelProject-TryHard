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
