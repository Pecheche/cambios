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

route::view('/crear-ventana', 'crear-ventana')->name('crear-ventana');
route::post('/crear-ventana', 'MessagesController@store')->name('crear-ventana'); 





route::view('/nuevaprueba', 'nuevaprueba')->name('nuevaprueba');