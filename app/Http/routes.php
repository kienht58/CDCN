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

Route::get('/', [
	'as' => 'dashboard.index',
	'uses' => 'DashboardController@index'
]);

Route::get('/intro', function() {
	return view('intro.intro');
});

Route::get('/faq', function() {
	return view('faq.faq');
});

Route::group(['prefix' => 'categories'], function() {
	Route::get('/{category_id}', [
		'as' => 'categories.show',
		'uses' => 'CategoriesController@show'
	]);
});

Route::group(['prefix' => '/categories/{category_id}/posts'], function() {
	Route::get('/{post_id}', [
		'as' => 'post.show',
		'uses' => 'PostsController@show'
	]);
	Route::post('/{post_id}', [
		'as' => 'post.storeReview',
		'uses' => 'PostsController@storeReview'
	]);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
	Route::get('game/create', [
		'as' => 'game.create',
		'uses' => 'GamesController@create'
	]);
	Route::post('game', [
		'as' => 'game.store',
		'uses' => 'GamesController@store'
	]);
});

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@doRegister');
Route::get('activate/{code}', 'Auth\AuthController@activate');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

