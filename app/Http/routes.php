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


Route::group(['prefix' => 'user'], function () {

	Route::get('register', function () {
		return view('app.pages.register');
	});

	Route::post('register', [
		'uses' 	=> 'UserController@create',
		'as' 	=> '/',
	]);

	Route::get('login', function () {
		return view('app.pages.login');
	});

	Route::post('login', [
		'uses' 	=> 'UserController@login',
		'as' 	=> '/',
	]);

});











Route::get('classes', [
	'uses' 	=> 'ClassController@class_group',
	'as' 	=> '/',
]);

Route::get('classes/{class_name}', [
	'uses' 	=> 'ClassController@view',
	'as' 	=> '/',
]);

Route::get('{group}/classes', [
	'uses' 	=> 'ClassController@class_list',
	'as' 	=> '/',
]);

Route::group(['prefix' => 'class'], function () {

	Route::get('category', [
		'uses' 	=> 'ClassController@getCreateCategory',
		'as' 	=> '/',
	]);

	Route::post('category', [
		'uses' 	=> 'ClassController@postCreateCategory',
		'as' 	=> '/',
	]);

	Route::get('group', function () {
		return view('dashboard.pages.add_class_group');
	});

	Route::post('group', [
		'uses' 	=> 'ClassController@createGroup',
		'as' 	=> '/',
	]);

	Route::get('create', [
		'uses' 	=> 'ClassController@getCreateClass',
		'as' 	=> '/',
	]);

	Route::post('create', [
		'uses' 	=> 'ClassController@postCreateClass',
		'as' 	=> '/',
	]);
});

Route::post('review/create', [
	'uses' 	=> 'ReviewController@create',
	'as' 	=> '/',
]);

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

	Route::group(['prefix' => 'gym'], function () {

		Route::get('{id}/edit', [
			'uses' 	=> 'GymController@edit',
			'as' 	=> '/',
		]);

		Route::post('update', [
			'uses' 	=> 'GymController@update',
			'as' 	=> '/',
		]);	

		Route::get('{id}/delete', [
			'uses' 	=> 'GymController@delete',
			'as' 	=> '/',
		]);

		Route::post('create', [
			'uses' 	=> 'GymController@create',
			'as' 	=> '/',
		]);
	});

	Route::group(['prefix' => 'class'], function () {

		Route::get('/', [
			'uses' 	=> 'ClassController@dashboardClasses',
			'as' 	=> '/',
		]);
		
		Route::get('{id}/edit', [
			'uses' 	=> 'ClassController@getEditClass',
			'as' 	=> '/',
		]);

		Route::post('update', [
			'uses' 	=> 'ClassController@updateClass',
			'as' 	=> '/',
		]);

		Route::get('groups', [
			'uses' 	=> 'ClassController@dashboardGroups',
			'as' 	=> '/',
		]);

		Route::get('group/{id}/edit', [
			'uses' 	=> 'ClassController@editClassGroup',
			'as' 	=> '/',
		]);

		Route::post('group/update', [
			'uses' 	=> 'ClassController@updateGroup',
			'as' 	=> '/',
		]);

		Route::get('categorys', [
			'uses' 	=> 'ClassController@dashboardCategory',
			'as' 	=> '/',
		]);

		Route::get('category/{id}/edit', [
			'uses' 	=> 'ClassController@editCategory',
			'as' 	=> '/',
		]);
		
		Route::post('category/update', [
			'uses' 	=> 'ClassController@updateCategory',
			'as' 	=> '/',
		]);
	});

	Route::get('trainers', [
		'uses' 	=> 'TrainerController@trainers',
		'as' 	=> '/',
	]);

	Route::group(['prefix' => 'trainer'], function () {
		
		Route::get('/', [
			'uses' 	=> 'TrainerController@getCreate',
			'as' 	=> '/',
		]);

		Route::get('create', function () {
			return view('dashboard.pages.add_trainer');
		});

		Route::post('create', [
			'uses' 	=> 'TrainerController@create',
			'as' 	=> '/',
		]);

		Route::get('{id}/edit', [
			'uses' 	=> 'TrainerController@getEdit',
			'as' 	=> '/',
		]);

		Route::post('update', [
			'uses' 	=> 'TrainerController@update',
			'as' 	=> '/',
		]);
	});

});

Route::get('gyms', [
	'uses' 	=> 'GymController@index',
	'as' 	=> '/',
]);

Route::group(['prefix' => 'gym'], function () {
	
	Route::get('/', function () {
		return view('dashboard.pages.index');
	});

	Route::get('create', function () {
		return view('dashboard.pages.index');
	});
});








