<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

Route::get("/category/{category:slug}", "HomeController@category")->name("category");

Route::get("/product/{product:slug}", "HomeController@product");


Route::get('/', 'WebController@index');
Route::get('/search', "FeatureAjaxController@getSearch");
Route::post('/search', "HomeController@postSearch");
//Route::get('/model/{id}
Route::get("/about", "HomeController@about");
Route::get("/contact", "HomeController@contact");
Route::get("/myaccount", "HomeController@myaccount");
Route::get("/shop","HomeController@shop");


Route::post("/cart/add/{product}", "HomeController@addToCart");
Route::get("/shopping-cart","HomeController@shoppingCart");
Route::get("/checkout","HomeController@checkout")->middleware("auth");
Route::post("/checkout","HomeController@placeOrder")->middleware("auth");

// blog Route
Route::get("/blog","BlogController@index");





