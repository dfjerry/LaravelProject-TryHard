<?php

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'WebController@index');

