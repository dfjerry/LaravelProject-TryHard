<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("home");
    }
}
