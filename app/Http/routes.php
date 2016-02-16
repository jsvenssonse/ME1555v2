<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Users
Route::get('/users', 'UserController@showUsers');
Route::get('/user/{id}', 'UserController@showUser');
Route::get('/user/{id}/posts', 'UserController@showUserPost');

//Posts
Route::get('/posts', 'postController@showPosts');
Route::get('/posts/{id}', 'postController@showPost');

//Tag
Route::get('/tags', 'tagController@showTags');
Route::get('/tags/{name}', 'tagController@showTag');







/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
