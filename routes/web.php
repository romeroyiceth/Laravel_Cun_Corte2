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

Route::get('/', function () {
    return view('welcome');  
});

 //Rutas del Primer Taller Corte 2
 Route::get('/auto', 'AutoController@index');
 Route::post('/auto/store', 'AutoController@store');

 Route::post('/programador', 'ProgramadorController@storeAttach');
 Route::post('/programador/store', 'ProgramadorController@storeSync');
 
 Route::get('/curso', 'CursoController@index');
 Route::get('/curso/programa', 'CursoController@getProgramas');
 Route::post('/curso/store', 'CursoController@store');
 Route::post('/curso/storecreate', 'CursoController@storecreate');