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

Route::group(['middleware' => 'guest'], function(){

	Route::get('/', function () {
	    return view('index');
	});

	Route::post('/register', [
		'as' => 'auth.register',
		'uses' => 'Auth\RegisterController@register'
	]);

	Route::post('/login', [
		'as' => 'auth.login',
		'uses' => 'Auth\LoginController@login'
	]);

});

Route::group(['middleware' => 'auth'], function(){

	Route::get('/logout', [
		'as' => 'auth.logout',
		'uses' => 'Auth\LoginController@logout'
	]);

	Route::get('/home', [
		'as' => 'home',
		'uses' => 'HomeController@index'
	]);

	Route::post('/post/save', [
		'as'=>'post.save',
		'uses'=>'PostsController@save'
	]);

});