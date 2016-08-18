<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tracy', function () {
    throw new \Exception('Error');
});

// Route::get('home', function () {
//     return view('home.index');
// });

Route::get('home',          ['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('hello/{name?}', ['as'=>'hello.index','uses'=>'HelloController@index']);

Route::get('posts',       ['as'=>'posts.index','uses'=>'PostsController@index']);
Route::get('posts/{id?}', ['as'=>'posts.show' ,'uses'=>'PostsController@show' ]);