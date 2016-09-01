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
Route::get('/student', 'HomeController@studentProfile');
Route::get('/counselor', 'HomeController@counselor');


//    AUTHORIZE   //


Route::get('/counselor/myStudents', 'HomeController@myStudents');
Route::get('/student/mySchools', 'HomeController@mySchools');
Route::get('/student/activities', 'HomeController@activities');
Route::get('/schools/search', 'HomeController@search');


Route::get('/auth/login', 'HomeController@login');
Route::post('/auth/login', 'HomeController@login');
Route::get('/auth/register', 'HomeController@register');
Route::get('/auth/profile', 'HomeController@profile');


//    SCHOOLS   //
Route::get('/student/mySchools', 'HomeController@mySchools');


//    TASKS   //
Route::get('/counselor/myStudents', 'HomeController@myStudents');
Route::get('/counselor/studentTasks', 'HomeController@studentTasks');
Route::get('/student/writeAnEssay', 'HomeController@writeAnEssay');
Route::get('/student/myEssays', 'HomeController@myEssays');




