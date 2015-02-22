<?php

/*
|--------------------------------------------------------------------------
| Events
|--------------------------------------------------------------------------
|
*/

Event::listen('Larabook.Registration.Events.UserRegistered', function($event){

	// dd('Send a notification email');

});	

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
|
*/

Route::get('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@create'
]);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
]);

/*
|--------------------------------------------------------------------------
| Sessions
|--------------------------------------------------------------------------
|
*/

Route::get('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@create'
]);

Route::post('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@store'
]);

Route::get('logout', [
	'as' => 'logout_path',
	'uses' => 'SessionsController@destroy'
]);

/*
|--------------------------------------------------------------------------
| Statuses
|--------------------------------------------------------------------------
|
*/

Route::get('/statuses', 'StatusController@index');
