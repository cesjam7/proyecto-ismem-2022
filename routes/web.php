<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmpleadoController;

Route::get('/clientes', [CustomerController::class, 'index'])
->middleware(['auth', 'verified'])->name('clientes');

Route::get('/clientes/registrar', [CustomerController::class, 'registrar'])
->middleware(['auth', 'verified'])->name('clientes.registrar');

Route::post('/clientes/guardar', [CustomerController::class, 'guardar'])
->middleware(['auth', 'verified'])->name('clientes.guardar');





Route::get('/empleados', [EmpleadoController::class, 'index'])
->middleware(['auth', 'verified'])->name('empleados');





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ventas', function () {
    return view('ventas');
})->middleware(['auth', 'verified'])->name('ventas');

require __DIR__.'/auth.php';

