<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("home");
    }
    public function listCategory(){
        return view("category.list");
    }
}
