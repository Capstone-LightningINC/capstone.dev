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
Route::get('/profile', 'HomeController@profile');
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
Route::get('/schools/search', 'HomeController@search');
Route::get('/schools/{id}', 'HomeController@school');
Route::get('myschools/{school_id}', 'SchoolsController@addToMySchools');
Route::get('/showschools', 'SchoolsController@displayMySchools');
Route::get('/deletemyschools/{id}', 'SchoolsController@deleteMySchools');


//    TASKS   //
Route::get('myStudents', 'HomeController@myStudents');
Route::get('showStudent/{id}', 'HomeController@showStudent');
Route::get('/counselor/studentTasks', 'HomeController@studentTasks');

Route::post('/student/activities', 'HomeController@destroy');
Route::get('/student/calendar', 'HomeController@showCalendar');
Route::get('/student/showEssays', 'EssaysController@showEssays');
Route::get('/student/showEssays/delete{id}', 'EssaysController@deleteEssay');
Route::get('/counselor/createTasks', 'HomeController@createTasks');

// ESSAYS
Route::get('/student/writeAnEssay', 'EssaysController@writeAnEssay');
Route::get('/students/schools/topics/{school_id}', 'EssaysController@topics');
Route::post('/essays', 'EssaysController@store');
Route::get('/student/myEssays', 'EssaysController@myEssays');

// ACTIVITIES 
Route::get('/student/activities', 'ActivitiesController@activities');
Route::post('/student/activities', 'ActivitiesController@activities');
Route::post('/student/activities/add', 'ActivitiesController@addToMyActivities');
Route::get('/student/activities/delete{id}', 'ActivitiesController@deleteMyActivities');

Route::post('/student/edit/activities', 'ActivitiesController@editMyActivities');

