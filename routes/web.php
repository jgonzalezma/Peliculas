<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'peliculasController@listarPeliculas');
Route::get('/nuevaPelicula', function(){
	return view('nuevaPelicula');
});

Route::get('/nuevaPelicula', 'directorController@listarDirectores');
Route::post('/nuevaPelicula', 'peliculasController@createPelicula')->name('crearPeli');

Route::get('/nuevoDirector', function(){
	return view('nuevoDirector');
});

Route::post('/nuevoDirector', 'directorController@createDirector')->name('nuevoDir');

