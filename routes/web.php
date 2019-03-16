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

Route::get('/', 'PageController@index');

Route::resource('/Aserfi-cp', 'InicioSesionController');
Route::post('/iniciarSesion', 'InicioSesionController@iniciarSesion');
Route::get('/cerrarSesion', 'InicioSesionController@cerrarSesion');

Route::get('/Usuarios', 'UsuariosController@index')->middleware('menu', 'permiso');
Route::post('/Usuarios/gridUsuarios', 'UsuariosController@gridUsuarios');
Route::post('/Usuarios/getUsuario', 'UsuariosController@getUsuario');
Route::post('/Usuarios/saveUsuario', 'UsuariosController@saveUsuario');
Route::post('/Usuarios/toggleRegistro', 'UsuariosController@toggleRegistro');

Route::get('/Carrusel', 'CarruselController@index')->middleware('menu', 'permiso');
Route::get('/QuienesSomos', 'QuienesSomosController@index')->middleware('menu', 'permiso');
Route::get('/Servicios', 'ServiciosController@index')->middleware('menu', 'permiso');
Route::get('/Beneficios', 'BeneficiosController@index')->middleware('menu', 'permiso');
Route::get('/Contacto', 'ContactoController@index')->middleware('menu', 'permiso');
Route::post('/getInformacion', 'ConfiguracionController@getInformacion');
Route::post('/getInformacionASC', 'ConfiguracionController@getInformacionASC');
Route::post('/saveInformacion', 'ConfiguracionController@saveInformacion');
Route::post('/saveInformacionWithImg', 'ConfiguracionController@saveInformacionWithImg');
Route::post('/saveInformacionWithImg2', 'ConfiguracionController@saveInformacionWithImg2');
Route::post('/saveImg', 'ConfiguracionController@saveImg');
Route::post('/saveImg2', 'ConfiguracionController@saveImg2');
Route::post('/saveImg3', 'ConfiguracionController@saveImg3');

Route::post('/getSelectPerfiles', 'ConfiguracionController@getSelectPerfiles');


