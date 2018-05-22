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

Route::resource('usuarios', 'UsuarioController');

Route::get('/comparativa', function () {
    return view('comparativa');
});

Route::get('/notificaciones', function () {
    return view('notificaciones');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/salir', function () {
    return view('salir');
});
