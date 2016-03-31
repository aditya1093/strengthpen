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

/* Added routes for authentication */
Route::auth();

/* Welcome Route */
Route::get('/', function () {
    return view('welcome');
});

/* Home Routes */
Route::get('/home', 'HomeController@index');
