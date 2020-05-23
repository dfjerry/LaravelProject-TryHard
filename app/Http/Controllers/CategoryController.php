<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Category Controller
    public function listCategory(){
        return view("category.list");
    }
}
