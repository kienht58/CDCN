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

Route::group(['prefix' => 'admin'], function() {
	Route::get('game/create', [
		'as' => 'game.create',
		'uses' => 'GamesController@create'
	]);
	Route::post('game', [
		'as' => 'game.store',
		'uses' => 'GamesController@store'
	]);
});

Route::auth();

// Route::get('/home', 'HomeController@index');
