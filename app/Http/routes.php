<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

/*
| Authentication Routes
|--------------------------------------------------------------------------
| Adds routes for /login, /logout, /register and /password/reset
*/
Route::auth();

/*
| Public Routes
|--------------------------------------------------------------------------
| Can be accessed by all users
*/
Route::get('/', 'PublicController@index');
Route::get('/how-it-works', 'PublicController@howItWorks');

/*
| Plan Routes
|--------------------------------------------------------------------------
| Can only be accessed by logged in users
*/
Route::get('/plans', 'PlanController@index');
Route::get('/plan/{plan}', 'PlanController@detail');
Route::post('/plan', 'PlanController@store');
Route::delete('/plan/{plan}', 'PlanController@destroy');
Route::put('/plan/{plan}', 'PlanController@update');

/*
| Day Routes
|--------------------------------------------------------------------------
| Can only be accessed by logged in users
*/
Route::post('/day/{plan}', 'DayController@store');
Route::delete('/day/{day}', 'DayController@destroy');
