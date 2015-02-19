<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','HomeController@index');
Route::get('/login','UserController@showLogin');
Route::post('/login','UserController@login');
Route::get('/register','UserController@showRegister');
Route::post('/register','UserController@register');
Route::get('/users','UserController@index');

Route::controller('ajax', 'AjaxController');

/*Admin Page Routes*/
Route::group(array('before' => 'auth.admin'), function()
{
});