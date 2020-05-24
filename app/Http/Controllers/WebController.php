<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function login()
    {
        return view("login");
    }
    public function forgotPassword()
    {
        return view("forgot-password");
    }
    public function index(){
        return view("home");
    }

}
