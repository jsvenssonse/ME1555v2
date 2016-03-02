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
Route::group(['middleware' => ['cors'],'prefix' => 'api'], function () {
    //Course
    Route::get('/courses','CourseController@showCourses');
    Route::get('/course/{id}', 'CourseController@showCourse');
    Route::get('/cat/{name}', 'CourseController@showCat');

    //Users
    Route::get('/users', 'UserController@showUsers');
    Route::get('/user/{id}', 'UserController@showUser');
    Route::get('/user/{id}/posts', 'UserController@showUserPosts');
    Route::get('/user/{id}/courses', 'UserController@showUserCourses');
    Route::put('/user/edit', 'UserController@editUser');

    //Posts
    Route::get('/posts', 'PostController@showPosts');
    Route::get('/post/{id}', 'PostController@showPost');
    Route::put('/post/edit', 'PostController@editPost');
    Route::post('/post/create', 'PostController@createPost');
    Route::delete('/post/delete', 'PostController@deletePost');
    //Tag
    Route::get('/tags', 'TagController@showTags');
    Route::get('/tag/{name}', 'TagController@showTag');
    Route::post('/tag/create', 'TagController@createTag');

});








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
