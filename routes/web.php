<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','IndexController@index');
Route::get('lang/{lang}',function($lang){
	$available = ['en','th'];
	Session::put('locale', in_array($lang,$available) ? $lang : config::get('app.locale'));
	return redirect()->back();
});

Route::get('travel','TravelController@index');
Auth::routes();
// register
Route::get('register','Auth\RegistrationController@index');
Route::post('register','Auth\RegistrationController@store');

Route::get('login','SessionsController@index');
Route::post('login','SessionsController@store');

Route::get('logout','SessionsController@logout');

Route::get('mail','MailThemController@index');
Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'Auth\RegistrationController@confirm'
]);

Route::get('/home', 'HomeController@index');
