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
    return view('meme');
})->name('Hola');

Route::get('/inicio', function () {
    return view('index');
})->name('inicio');

Route::get('/historia', function () {
    return view('index');
})->name('historia');

Route::get('/datos', function () {
    return view('Datos');
})->name('datos');

Route::get('/datos', function () {
    return view('Datos');
})->name('datos');

Route::get('/enemigos', function (){
    return view('Enemigos');
})->name('enemigos');

