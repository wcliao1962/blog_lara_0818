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
    throw new \Exception('Tracy works!');
});

// Route::get('home', function () {
//     return view('home');
// });
// Route::get('home', function () {
//     return view('home.index0');
// });


Route::get('home',          ['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('hello/{name?}', ['as'=>'hello.index','uses'=>'HelloController@index']);

//Route::get('blogs',       ['as'=>'posts.index','uses'=>'BlogsController@index']);
//Route::get('blogs/{id?}', ['as'=>'posts.show' ,'uses'=>'BlogsController@show' ]);

Route::get('blogs/posts',       ['as'=>'blogs.posts.index','uses'=>'PostsController@index']);
Route::get('blogs/posts/{id?}', ['as'=>'blogs.posts.show' ,'uses'=>'PostsController@show' ]);