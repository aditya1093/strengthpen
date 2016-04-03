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
Route::get('/', 'PublicController@welcome');
Route::get('/how-it-works', 'PublicController@howItWorks');

/*
| Home Routes
|--------------------------------------------------------------------------
| Can only be accessed by logged in users
*/
Route::get('/my-plans', 'PlanController@myPlans');
Route::post('/plan', 'PlanController@addPlan');
