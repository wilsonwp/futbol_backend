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
Route::get('/','BackendController@index');
Route::get('admin','BackendController@admin');
Route::resource('users','UserController');
Route::resource('campeonatos','CampeonatosController');
Route::resource('equipos','EquiposController');
Route::resource('jornadas','JornadasController');
Route::resource('partidos','PartidosController');
Route::resource('jugadores','JugadoresController');
Route::get('jugadoresList','JugadoresController@listing');
Route::resource('login','LoginController');
Route::get('logout','LoginController@logout');
Route::resource('mails','MailController');
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::resource('perfiles', 'PerfilesController');
Route::get('verPerfil','PerfilesController@listing');