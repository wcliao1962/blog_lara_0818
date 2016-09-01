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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/tracy', function () {
//    throw new \Exception('Tracy works!');
//});

// Route::get('home', function () {
//     return view('home');
// });
// Route::get('home', function () {
//     return view('home.index0');
// });

//
//Route::get('home',          ['as'=>'home.index','uses'=>'HomeController@index']);
//Route::get('hello/{name?}', ['as'=>'hello.index','uses'=>'HelloController@index']);

//Route::get('blogs',       ['as'=>'posts.index','uses'=>'BlogsController@index']);

//Route::get('blogs/posts',       ['as'=>'blogs.posts.index','uses'=>'PostsController@index']);
Route::get('blogs/posts/{pid?}', ['as'=>'blogs.posts.show' ,'uses'=>'PostsController@show' ]);
Route::get('blogs/{uid?}', ['as'=>'posts.show' ,'uses'=>'BlogsController@show' ]);

Route::get('admin/postslist/{uid}',  ['as'=>'admin.postslist' ,'uses'=>'AdminController@postslist' ]);
Route::get('admin/edit/{pid}',       ['as'=>'admin.edit' ,     'uses'=>'AdminController@edit' ]);
Route::get('admin/post/{uid}',       ['as'=>'admin.post' ,     'uses'=>'AdminController@post' ]);
Route::get('admin/{uid}',            ['as'=>'admin.index',     'uses'=>'AdminController@index']);
