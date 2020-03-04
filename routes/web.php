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
route::view('/layout', 'layout')->name('layout');