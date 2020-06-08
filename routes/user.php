<?php
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

Route::get("/category/{category:slug}", "HomeController@category")->name("category");

Route::get("/product/{product:slug}", "HomeController@product");


Route::get('/', 'WebController@index');

Route::post('/search', "HomeController@postSearch");
//Route::get('/modal/{id}




