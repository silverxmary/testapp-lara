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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function() 
{
return 'Welcome to our home page!';
});*/

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');
//Route::get('/contact', 'PagesController@contact');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
