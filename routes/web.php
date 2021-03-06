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
	
	Route::get('/user/{id}', [
		'as' => 'user',
		'uses' => 'HomeController@user'
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

	Route::post('/post/{id}/delete', [
		'as'=>'post.delete',
		'uses'=>'PostsController@delete'
	]);

	Route::get('/friends', [
		'as' => 'friends',
		'uses' => 'FriendsController@index'
	]);

	Route::post('/friend/{id}/request', [
		'as' => 'friend.request',
		'uses' => 'FriendsController@request'
	]);

	Route::post('/request/{id}/accept', [
		'as' => 'request.accept',
		'uses' => 'FriendsController@accept'
	]);

	Route::post('/request/{id}/reject', [
		'as' => 'request.reject',
		'uses' => 'FriendsController@reject'
	]);

	Route::post('/friend/{id}/remove', [
		'as' => 'friend.remove',
		'uses' => 'FriendsController@remove'
	]);
	
	Route::post('/search',[
		'as' => 'search',
		'uses'=> 'SearchController@search'
	]);
	Route::post('/search/filter',[
		'as' => 'searchFilter',
		'uses'=> 'SearchController@filter'
	]);
});