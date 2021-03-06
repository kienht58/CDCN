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

Route::get('/faq', [
	'as' => 'faq',
	'uses' => 'DashboardController@faq'
]);

Route::get('/intro', [
	'as' => 'intro',
	'uses' => 'DashboardController@intro'
]);

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

Route::get('game/create', [
	'as' => 'game.create',
	'uses' => 'GamesController@create'
]);
Route::post('game', [
	'as' => 'game.store',
	'uses' => 'GamesController@store'
]);
Route::get('game/{game_id}/edit', [
	'as' => 'game.edit',
	'uses' => 'GamesController@edit'
]);
Route::post('game/{game_id}/', [
	'as' => 'game.update',
	'uses' => 'GamesController@update'
]);

Route::delete('game/{game_id}/', [
	'as' => 'game.delete',
	'uses' => 'GamesController@delete'
]);

Route::get('login', 'Auth\AuthController@showLoginForm_2');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@showRegistrationForm_2');
Route::post('register', 'Auth\AuthController@doRegister');
Route::get('activate/{code}', 'Auth\AuthController@activate');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
