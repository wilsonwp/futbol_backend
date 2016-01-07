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
Route::get('noticiasList','NoticiasController@listing');
Route::get('jornadasList','JornadasController@listing');
Route::resource('login','LoginController');
Route::get('logout','LoginController@logout');
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::resource('perfiles', 'PerfilesController');
Route::get('verPerfil','PerfilesController@listing');
Route::get('select_jornadas/{id}','PartidosController@get_jornada');
Route::get('select_equipos/{id}','PartidosController@get_equipo');
Route::get('select_estadio/{id}','PartidosController@get_estadio');
Route::get('select_estatus/{id}','PartidosController@get_estatus');
Route::get('partidos_live','PartidosController@partidos_live');
Route::get('partidos_live_visitante','PartidosController@partidos_live_visitante');
Route::get('search_jugadores/{nombre}','JugadoresController@search_jugador');
Route::get('comentarios/{partido}','PartidosController@get_comentarios');
Route::resource('noticias','NoticiasController');
Route::resource('arbitros','ArbitrosController');
Route::resource('tecnicos','TecnicosController');
Route::resource('comentarios','ComentariosController');
Route::group(array('middleware' => ''), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});