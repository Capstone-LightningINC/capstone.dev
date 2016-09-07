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
Route::get('/counselor/myStudents', 'HomeController@myStudents');

// PROFILE //
Route::get('/profile/{id}', 'HomeController@profile');
Route::get('/profile/{student_id}/edit', 'HomeController@editProfile');
Route::post('/save/profile', 'PersonalInfoController@validateAndSave');
Route::post('/save/user', 'UsersController@validateAndSave');


//    AUTHORIZE   //

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//    REGISTER   //
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



//    SCHOOLS   //
Route::get('/student/{id}/mySchools', 'SchoolsController@mySchools');
Route::get('/schools/index', 'SchoolsController@index');
Route::get('/school/search', 'SchoolsController@search');
Route::get('/schools/{id}/profile', 'SchoolsController@show');

//    TASKS   //
Route::get('/counselor/myStudents', 'HomeController@myStudents');
Route::get('/counselor/studentTasks', 'HomeController@studentTasks');
Route::get('/student/writeAnEssay', 'HomeController@writeAnEssay');
Route::get('/student/myEssays', 'HomeController@myEssays');
Route::get('/student/activities', 'HomeController@activities');