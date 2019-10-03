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
	// return view('welcome');
	return redirect('/home');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard/{network_id}', 'HomeController@dashboard')->name('home.dasboard');
Route::get('/posts/import','PostController@import')->name('posts.import');
Route::get('/posts/parse/{post}','PostController@parseComments')->name('posts.parseComments');

Route::get('/comments/import','CommentController@import')->name('comments.import');
Route::get('/comments/{network_id}/{account}','CommentController@indexNetwork')->name('comments.indexNetwork');

Route::get('/shares/{network_id}/{account}','ShareController@indexNetwork')->name('shares.indexNetwork');



Route::get('/followers/import','FollowerController@import')->name('follower.import');
Route::get('/followers/ranking','FollowerController@ranking')->name('follower.ranking');
Route::get('/followers/data/{network_id}/{account}','FollowerController@indexNetwork')->name('follower.indexNetwork');
Route::get('/followers/ranking/{network_id}/{account}','FollowerController@ranking')->name('follower.ranking');


Route::get('/posts/{network_id}/{account}','PostController@indexNetwork')->name('posts.indexNetwork');
Route::get('/reactions/{network_id}/{account}','ReactionController@indexNetwork')->name('reactions.indexNetwork');


Route::get('/twitter/tweet/{id}','PostController@tweet')->name('twitter.tweet');

Route::get('/home/{network_id}','PostController@index')->name('home.network.index');
// Route::get('/home/instagram','PostController@index')->name('home.instagram.index');
// Route::get('/home/twitter','PostController@index')->name('home.twitter.index');


Route::resource('followers','FollowerController');
Route::resource('comments','CommentController');
Route::resource('posts','PostController');
Route::resource('reactions','ReactionController');
Route::resource('shares','ShareController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

