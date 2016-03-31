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

/*
| Home Routes
|--------------------------------------------------------------------------
| Can only be accessed by logged in users
*/
Route::get('/dashboard', 'HomeController@index');
