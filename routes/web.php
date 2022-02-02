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
    return view('inicio');
});

Route::get('/generic', function () {
    return view('generic');
})->name('generic');

Route::get('/generic1', function () {
    return view('generic1');
})->name('generic1');

Route::get('/generic2', function () {
    return view('generic2');
})->name('generic2');

Route::get('/generic3', function () {
    return view('generic3');
})->name('generic3');

Route::get('/generic4', function () {
    return view('generic4');
})->name('generic4');

Route::get('/generic5', function () {
    return view('generic5');
})->name('generic5');

Route::get('/generic6', function () {
    return view('generic6');
})->name('generic6');

Route::get('/generic7', function () {
    return view('generic7');
})->name('generic7');

Route::get('/generic8', function () {
    return view('generic8');
})->name('generic8');