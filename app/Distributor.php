<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = "distributors";
    //khóa chính là id thì ko cần phải viết lại
    //loc cac trường còn lại của bảng
    //Model (ORM)
    public $fillable = [
        "distributor_name",
        "address",
        "telephone",
        "logo"
    ];
    public function getImage(){
        if (is_null($this->__get("logo"))){
            return asset("media/distributor.jpeg");
        }
        return asset($this->__get("logo"));
    }
}
