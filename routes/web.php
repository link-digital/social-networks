<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/import','PostController@import')->name('posts.import');
Route::get('/comments/import','CommentController@import')->name('comments.import');
Route::get('/followers/import','FollowerController@import')->name('follower.import');



Route::resource('followers','FollowerController');
Route::resource('comments','CommentController');
Route::resource('posts','PostController');
Route::resource('reactions','ReactionController');



