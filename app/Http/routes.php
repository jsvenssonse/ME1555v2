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
Route::get('/test',function(){
    return view('test');
});


//Users
Route::get('/users', 'UserController@showUsers');
Route::get('/user/{id}', 'UserController@showUser');
Route::get('/user/{id}/posts', 'UserController@showUserPost');
Route::put('/user/{id}/edit', 'UserController@editUser');

//Posts
Route::get('/posts', 'PostController@showPosts');
Route::get('/post/{id}', 'PostController@showPost');
Route::put('/post/edit', 'PostController@editPost');

//Tag
Route::get('/tags', 'TagController@showTags');
Route::get('/tag/{name}', 'TagController@showTag');







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
