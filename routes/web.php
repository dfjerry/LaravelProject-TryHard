<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Router index login..
Route::get('/', "WebController@index");

//Category Router
Route::get("/list-category","CategoryController@listCategory");

//Products Router
Route::get("/list-product","ProductController@listProduct");
Route::get("/new-product","ProductController@newProduct");
Route::post("/save-product","ProductController@saveProduct");
Route::get("/edit-product/{id}","ProductController@editProduct");
Route::put("/update-product/{id}","ProductController@editProduct");
Route::delete("/delete-product/{id}","ProductController@editProduct");

//brand sau khi 7x7=49 lan clone(:T)
//Brand Router
Route::get('/list-brand', 'BrandController@listBrand');
Route::get('/new-brand', 'BrandController@newBrand');
Route::post('/save-brand', 'BrandController@saveBrand');
Route::get("/edit-brand/{id}", "BrandController@editBrand");
Route::put("/update-brand/{id}", "BrandController@updateBrand"); //cap nhat du lieu
Route::delete("/delete-brand/{id}", "BrandController@deleteBrand");

// User Router

