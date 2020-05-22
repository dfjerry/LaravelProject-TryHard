<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    // khóa chính là id thì không cần phải viết lại
    // lọc các trường còn lại của bảng
    public $fillable = [
        "category_name"
    ];
}
