<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public $fillable = [
        "category_name",
        "category_image"
    ];
    public function getImage(){
        if(is_null($this->__get("category_image"))){
            return asset("media/category.jpeg");
        }
        return asset($this->__get("category_image"));
    }

//    public function get($key)
//    {
//        if(is_null($this->__get($key)))
//            return "default value";
//        return $this->get($key);
//    }

    public function Products(){
        return $this->hasMany("App\Product"); // tra ve 1 collection
    }
}
