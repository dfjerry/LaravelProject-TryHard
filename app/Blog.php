<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";

    public $fillable = [
        "title",
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
}
