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
Route::get('/posts/parse/{post}','PostController@parseComments')->name('posts.parseComments');

Route::get('/comments/import','CommentController@import')->name('comments.import');
Route::get('/comments/{network_id}','CommentController@indexNetwork')->name('comments.indexNetwork');

Route::get('/shares/{network_id}','ShareController@indexNetwork')->name('shares.indexNetwork');



Route::get('/followers/import','FollowerController@import')->name('follower.import');
Route::get('/followers/ranking','FollowerController@ranking')->name('follower.ranking');
Route::get('/followers/{network_id}','FollowerController@indexNetwork')->name('follower.indexNetwork');
Route::get('/followers/ranking/{network_id}','FollowerController@ranking')->name('follower.ranking');

Route::get('/posts/{network_id}','PostController@indexNetwork')->name('posts.indexNetwork');

Route::get('/twitter/tweet/{id}','PostController@tweet')->name('twitter.tweet');


Route::resource('followers','FollowerController');
Route::resource('comments','CommentController');
Route::resource('posts','PostController');
Route::resource('reactions','ReactionController');
Route::resource('shares','ShareController');



