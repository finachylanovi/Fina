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
    return view('welcome');
});
Route::get('halo', function () {
    return "selamat malam, ini adalah contoh website dari fina chylanovi";
});
Route::get('blog', function () {
    return view('blog');
});

Route::get('login', 'WisataController@login');