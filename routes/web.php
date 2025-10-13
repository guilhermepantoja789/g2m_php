<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'index'])->name('clientes.index'); // Adicionamos um nome à rota

// Rota para mostrar o formulário de criação
Route::get('/clientes/criar', [ClienteController::class, 'create'])->name('clientes.create');

// Rota para salvar o novo cliente
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
