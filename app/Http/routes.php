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

Route::get('/', 'WelcomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function()
{
	Route::get('home', 'HomeController@index');
    Route::resource('category','CategoryController');
	Route::resource('post','PostController');
	Route::resource('albumcat','AlbumCatController');
	Route::resource('album','AlbumController');
	Route::resource('photo','PhotoController');
	Route::resource('user','UserController');
	Route::resource('designation','DesignationController');
	Route::resource('district','DistrictController');
	Route::resource('hospitalcategory','HospitalCategoryController');
	Route::resource('hospital','HospitalController');
	Route::resource('staffrecord','StaffController');
	Route::resource('posting','PostingController');
	Route::get('hospitalByCat', 'PostingController@hospitalByCat');
});