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

Route::get('/', function () {
	return view('app.pages.index');
});






Route::get('classes', [
	'uses' 	=> 'ClassController@class_group',
	'as' 	=> '/',
]);

Route::get('yoga/classes', [
	'uses' 	=> 'ClassController@class_list',
	'as' 	=> '/',
]);



Route::group(['prefix' => 'class'], function () {

	Route::get('view', [
		'uses' 	=> 'ClassController@view',
		'as' 	=> '/',
	]);

	Route::get('admins', [
		'uses' 	=> 'AdminController@index',
		'as' 	=> '/',
	]);
});



Route::get('blogs', [
	'uses' 	=> 'BlogController@index',
	'as' 	=> '/',
]);

Route::get('contact', [
	'uses' 	=> 'ContactController@index',
	'as' 	=> '/',
]);








Route::group(['prefix' => 'dashboard'], function () {

	Route::get('/', function () {
		return view('dashboard.pages.index');
	});
});

Route::group(['prefix' => 'gym'], function () {
	
	Route::get('/', function () {
		return view('dashboard.pages.index');
	});

	Route::get('create', function () {
		return view('dashboard.pages.index');
	});

	Route::post('create', [
		'uses' 	=> 'GymController@create',
		'as' 	=> '/',
	]);
});





