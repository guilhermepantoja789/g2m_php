<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Garante que a rota principal '/' chame o nosso HomeController.
Route::get('/', [HomeController::class, 'index'])->name('home');

// Agrupa todas as rotas de gerenciamento de clientes sob o middleware de autenticação.
Route::middleware('auth')->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/criar', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});

// Carrega as rotas de autenticação (login, registro, logout) que o Breeze criou.
require __DIR__.'/auth.php';
