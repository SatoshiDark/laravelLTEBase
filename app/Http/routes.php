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

Route::get('/', 'HomeController@index');
Route::auth();

Route::get('/home', 'PacienteController@index');



//--------------Middleware stuff-----------------------------
Route::group(['middleware' => ['web']], function () {
    
  Route::get('/hematologia/create/{id}', 'HematologiaController@create');
  Route::resource('hematologia', 'HematologiaController');
  Route::resource('paciente', 'PacienteController');
  Route::resource('general', 'GeneralController');
  Route::resource('eform', 'EformController');

});