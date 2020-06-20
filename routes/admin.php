<?php
Route::get('/', "WebController@dashBoard");
//CategoryRepository Router
Route::get("/list-category","CategoryController@listCategory");
Route::get("/new-category","CategoryController@newCategory");
Route::post("/save-category","CategoryController@saveCategory");
Route::get("/edit-category/{id}","CategoryController@editCategory");
Route::put("/update-category/{id}","CategoryController@updateCategory");
Route::delete("/delete-category/{id}","CategoryController@deleteCategory");

//Products Router
Route::get("/list-product","ProductController@listProduct");
Route::get("/new-product","ProductController@newProduct");
Route::post("/save-product","ProductController@saveProduct");
Route::get("/edit-product/{id}","ProductController@editProduct");
Route::put("/update-product/{id}","ProductController@updateProduct");
Route::delete("/delete-product/{id}","ProductController@deleteProduct");



//Distributor
Route::get('/list-distributor', 'DistributorController@listDistributor');
Route::get('/new-distributor', 'DistributorController@newDistributor');
Route::post('/save-distributor', 'DistributorController@saveDistributor');
Route::get("/edit-distributor/{id}", "DistributorController@editDistributor");
Route::put("/update-distributor/{id}", "DistributorController@updateDistributor"); //cap nhat du lieu
Route::delete("/delete-distributor/{id}", "DistributorController@deleteDistributor");

// User Router
Route::get('/list-user', 'UserController@listUser');
Route::get('/new-user', 'UserController@newUser');
Route::put("/update-access/{id}","UserController@updateAccess");
Route::post('/save-user', 'UserController@saveUser');
Route::get("/edit-user/{id}", "UserController@editUser");
Route::put("/update-user/{id}", "UserController@updateUser");
Route::delete("/delete-user/{id}", "UserController@deleteUser");
Route::get("/view-user/{id}","UserController@viewUser");

//Blog Router
Route::get('/new-blog','BlogController@newBlog');
Route::get('/list-blog','BlogController@listBlog');
Route::put("/update-blog/{id}","BlogController@updateBlog");
Route::post('/save-blog', 'BlogController@saveBlog');
Route::get("/edit-blog/{id}", "BlogController@editBlog");
Route::delete("/delete-blog/{id}", "BlogController@deleteBlog");

