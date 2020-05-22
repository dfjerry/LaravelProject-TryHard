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

Route::get('/', "WebController@index");
//Category Route
Route::get('/list-category', "WebController@listCategory");
//Products Route
Route::get("/list-product","WebController@listProduct");
Route::get("/new-product","WebController@newProduct");
Route::post("/save-product","WebController@saveProduct");
Route::get("/edit-product/{id}","WebController@editProduct");
Route::put("/update-product/{id}","WebController@editProduct");
Route::delete("/delete-product/{id}","WebController@editProduct");

//brand sau khi 7x7=49 lan clone
//Brand
Route::get('/list-brand', 'WebController@listBrand');
Route::get('/new-brand', 'WebController@newBrand');
Route::post('/save-brand', 'WebController@saveBrand');
Route::get("/edit-brand/{id}", "WebController@editBrand");
Route::put("/update-brand/{id}", "WebController@updateBrand"); //cap nhat du lieu
Route::delete("/delete-brand/{id}", "WebController@deleteBrand");
