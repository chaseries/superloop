<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'guest'), function()
{
	Route::any('/', array('as' => '/', function() {
		return View::make('hello');
	}));

	Route::get('/login', array('as' => '/login', function() {
		return View::make('hello');
	}));

	Route::post('user/login', array(
		'as' => 'user/login',
		'uses' => 'UserController@loginAction'
	));

	Route::post('user/signup', array(
		'as' => 'user/signup',
		'uses' => 'UserController@signupAction'
	));

	Route::any('/request', array(
		'as' => 'user/request',
		'uses' => 'UserController@requestAction'
	));

	Route::any('/reset', array(
		'as' => 'user/reset',
		'uses' => 'UserController@resetAction'
	));
});

Route::group(array('before' => 'auth'), function()
{
	Route::any('/profile', array(
		'as' => '/profile',
		'uses' => 'UserController@profileAction'
	));

	Route::any('/about', array(
		'as' => '/about',
		'uses' => 'UserController@aboutAction'
	));

	Route::post('user/gender', array(
		'as' => 'user/gender',
		'uses' => 'UserController@genderAction'
	));

	Route::post('user/relationship', array(
		'as' => 'user/relationship',
		'uses' => 'UserController@relationshipAction'
	));

	Route::post('user/education', array(
		'as' => 'user/education',
		'uses' => 'UserController@educationAction'
	));

	Route::post('user/workplace', array(
		'as' => 'user/workplace',
		'uses' => 'UserController@workplaceAction'
	));

	Route::post('user/aboutGeneral', array(
		'as' => 'user/aboutGeneral',
		'uses' => 'UserController@aboutGeneralAction'
	));

	Route::post('user/aboutQuotes', array(
		'as' => 'user/aboutQuotes',
		'uses' => 'UserController@aboutQuotesAction'
	));

	Route::any('/superstring', array(
		'as' => 'superstring',
		'uses' => 'UserController@superstringAction'
	));

	Route::any('/logout', array(
		'as' => 'user/logout',
		'uses' => 'UserController@logoutAction'
	));

	Route::get('/search', array('as' => '/search', function() {
		//
	}));
});
