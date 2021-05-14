<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/layouts', function () {
    return view('layouts.app');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/productos/llantas', function () {
    return view('productos/llantas');
});

Route::get('/productos/cubiertas', function () {
    return view('productos/cubiertas');
});

Route::get('/productos/fuelles', function () {
    return view('productos/fuelles');
});

Route::get('/productos/ruedas', function () {
    return view('productos/ruedas');
});

Route::get('/productos/placas', function () {
    return view('productos/placas');
});

Route::get('/productos/mazas', function () {
    return view('productos/mazas');
});
