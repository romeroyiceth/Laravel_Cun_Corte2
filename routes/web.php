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

 //ejemplo de eager  y lazy 

Route::get('/curso/eager', 'CursoController@eager');
Route::get('/curso/lazy', 'CursoController@lazy');

 //Rutas del Segundo Taller Corte 2
 Route::get('/restaurante', 'RestauranteController@index');
 Route::post('/restaurante/create', 'RestauranteController@storecreate');
 Route::post('/restaurante/createmany', 'RestauranteController@storecreatemany');

 Route::get('/cafeteria', 'ReseñaController@index');
 Route::post('/cafeteria/create', 'CafeteriaController@storecreate');
 Route::post('/cafeteria/createmany', 'CafeteriaController@storecreatemany');

 Route::get('/hotel', 'ReseñaController@index');
 Route::post('/hotel/create', 'HotelController@storecreate');
 Route::post('/hotel/createmany', 'HotelController@storecreatemany');

 Route::get('/resena', 'ReseñaController@index');

 //Routas del parcial del segundo corte

 //ONE TO  ONE
 Route::get('/contrato', 'ContratoController@index');
 Route::post('/contrato/guardar', 'ContratoController@store');
 Route::post('/contrato/actualizar', 'ContratoController@update');


 //ONE TO MANY
 Route::get('/genero', 'GeneroController@index');
 Route::post('/genero/guardar', 'GeneroController@store');
 Route::post('/genero/actualizar', 'GeneroController@update');

 //MANY TO MANY 
 Route::get('/autor', 'AutorController@index');
 Route::post('/autor/guardar', 'AutorController@store');
 Route::post('/autor/actualizar', 'AutorController@update');


// POLIMORFICAS
Route::get('/administrador', 'AdministradorController@index');
Route::post('/administrador/guardar', 'AdministradorController@store');
Route::post('/administrador/actualizar', 'AdministradorController@update');
Route::post('/administrador/eliminar', 'AdministradorController@destroy');

Route::get('/usuario', 'ImagenController@index');
Route::post('/usuario/guardar', 'UsuarioController@store');
Route::post('/usuario/actualizar', 'UsuarioController@update');

Route::get('/imagen', 'ImagenController@index');