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

	Route::get('/login', function (){
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

	Route::get('/profile', [
		'as' => 'profile',
		'uses' => 'HomeController@profile'
	]);

	Route::get('/settings', [
		'as' => 'settings',
		'uses' => 'UsersController@edit'
	]);

	Route::post('/settings/update', [
		'as' => 'settings.update',
		'uses' => 'UsersController@update'
	]);

	Route::post('/post/save', [
		'as'=>'post.save',
		'uses'=>'PostsController@save'
	]);

	Route::get('/friends', [
		'as' => 'friends',
		'uses' => 'FriendsController@index'
	]);
	
	Route::post('/search',[
		'as' => 'search',
		'uses'=> 'SearchController@search'
	]);
});