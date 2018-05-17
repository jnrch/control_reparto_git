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
    return view('resumen');
});


Route::get('/mi_progreso', function () {
    return view('mi_progreso');
});

Route::get('/configuracion', function () {
    return view('configuracion');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/salir', function () {
    return view('salir');
});