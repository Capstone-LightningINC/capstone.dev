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


//    DASHBOARDS   //
Route::get('/', 'HomeController@index');
Route::get('/student', 'HomeController@studentProfile');
Route::get('/counselor', 'HomeController@counselor');
Route::get('/profile/{id}', 'HomeController@profile');
Route::get('/counselor/myStudents', 'HomeController@myStudents');


//    AUTHORIZE   //

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//    REGISTER   //
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



//    SCHOOLS   //

Route::get('/student/mySchools', 'HomeController@mySchools');
Route::get('/schools/search', 'HomeController@search');
Route::get('/schools/{id}', 'HomeController@school');



//    TASKS   //
Route::get('/counselor/myStudents', 'HomeController@myStudents');
Route::get('/counselor/studentTasks', 'HomeController@studentTasks');
Route::get('/student/writeAnEssay', 'HomeController@writeAnEssay');
Route::get('/student/myEssays', 'HomeController@myEssays');
Route::get('/student/activities', 'HomeController@activities');
Route::get('/counselor/createTasks', 'HomeController@createTasks');




