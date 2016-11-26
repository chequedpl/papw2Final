<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('user.login');
});

Route::resource('user', 'UserController', 
	['only' => ['index', 'store', 'update', 'destroy', 'show']]);


Route::post('/check', 'UserController@check');

Route::get('/register', 'UserController@register');

Route::get('/logout', 'UserController@logout');


Route::resource('comment', 'CommentController', 
	['only' => ['index', 'store', 'show']]);

Route::resource('product', 'ProductController', 
	['only' => ['index', 'store', 'update', 'destroy', 'show', 'edit']]);