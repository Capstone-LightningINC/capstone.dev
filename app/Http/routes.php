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



Route::get('/student', 'HomeController@studentProfile');
Route::get('/counselor', 'HomeController@counselor');


Route::get('/counselor/myStudents', 'HomeController@myStudents');
Route::get('/student/mySchools', 'HomeController@mySchools');
Route::get('/student/activities', 'HomeController@activities');
Route::get('/schools/search', 'HomeController@search');

Route::get('/auth/login', 'HomeController@login');
Route::post('/auth/login', 'HomeController@login');
Route::get('/auth/register', 'HomeController@register');
Route::get('/auth/profile', 'HomeController@profile');


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/profile/{id}', 'UsersController@show');
//
// Route::get('/counselor/{user_id}/dashboard', 'User\UsersController@showCounselor');
// Route::get('/student/{user_id}/dashboard', 'User\UsersController@showStudent');
//// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
//// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
