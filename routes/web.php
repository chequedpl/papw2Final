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
	['only' => ['index', 'store', 'update', 'show']]);


Route::post('/check', 'UserController@check');

Route::get('/registro', 'UserController@registro');

Route::post('/log', 'UserController@logout');

Route::get('/search', 'NotaController@search');

Route::get('/borrar/{id}', 'UserController@borrar');

Route::get('/nuevo', 'NotaController@nuevo');

Route::get('/editar/{id}', 'UserController@editar');

Route::resource('comment', 'CommentController', 
	['only' => ['index', 'store', 'show']]);

Route::resource('nota', 'NotaController', 
	['only' => ['index', 'store','show']]);


Auth::routes();

Route::get('/home', 'HomeController@index');
