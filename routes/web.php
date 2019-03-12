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
    return view('Page.Index');
});

Route::resource('/Aserfi-cp', 'InicioSesionController');

Route::get('/Usuarios', 'UsuariosController@index');//->middleware('menu');
Route::post('/Usuarios/gridUsuarios', 'UsuariosController@gridUsuarios');
Route::post('/Usuarios/getUsuario', 'UsuariosController@getUsuario');
Route::post('/Usuarios/saveUsuario', 'UsuariosController@saveUsuario');
Route::post('/Usuarios/toggleRegistro', 'UsuariosController@toggleRegistro');

Route::get('/Carrusel', 'CarruselController@index');//->middleware('menu');
Route::get('/QuienesSomos', 'QuienesSomosController@index');//->middleware('menu');
Route::get('/Servicios', 'ServiciosController@index');//->middleware('menu');
Route::get('/Beneficios', 'BeneficiosController@index');//->middleware('menu');
Route::get('/Contacto', 'ContactoController@index');//->middleware('menu');
Route::post('/getInformacion', 'ConfiguracionController@getInformacion');
