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


route::view('/', 'inicio')->name('inicio');

route::view('/prueba', 'prueba')->name('prueba');

//route::view('/usuarios', 'usuarios')->name('usuarios');
route::get('/usuarios', 'UsuariosController@index')->name('usuarios');

route::get('/verventana', 'Ventanacontroller@index')->name('verventana');
route::get('/crear-ventana', 'Ventanacontroller@create')->name('crear-ventana');
route::post('/verventana', 'Ventanacontroller@store')->name('verventana.store');
route::post('/crear-ventana', 'MessagesController@store')->name('crear-ventana'); 

route::get('/responsables', 'ResponsablesController@index')->name('responsables');





route::view('/nuevaprueba', 'nuevaprueba')->name('nuevaprueba');