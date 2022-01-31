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

Route::get('/saludo', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->name('inicio');

Route::get('/generic', function () {
    return view('generic');
})->name('TEMA 1');
