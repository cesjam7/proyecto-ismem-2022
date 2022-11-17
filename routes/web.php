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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/clientes', function () {
    return view('clientes');
})->middleware(['auth', 'verified'])->name('clientes');

Route::get('/empleados', function () {
    return view('empleados');
})->middleware(['auth', 'verified'])->name('empleados');

Route::get('/ventas', function () {
    return view('ventas');
})->middleware(['auth', 'verified'])->name('ventas');

require __DIR__.'/auth.php';

