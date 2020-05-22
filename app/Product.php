<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    // khóa chính là id thì không cần phải viết lại
    // lọc các trường còn lại của bảng
    public $fillable = [
        "product_name",
        "product_desc",
        "price",
        "qty",
        "category_id",
        "brand_id",
    ];
}
