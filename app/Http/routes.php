<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/




Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');
Route::get('/categorie', 'HomeController@categorie');
Route::get('/categorie/{cat}', 'HomeController@form');
Route::get('/map', 'HomeController@map');
Route::get('/place', 'HomeController@getplace');

Route::post('/recommande', 'HomeController@recommande');
Route::post('/recommande_r', 'HomeController@recommande_r');


Route::get('/autocomplete/univ', 'HomeController@autouniv');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
