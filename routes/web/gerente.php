<?php

use App\Http\Controllers\Backend\GerenteController;
use Illuminate\Support\Facades\Route;

// rota gerente
Route::get('gerente/dashboard', [GerenteController::class, 'dashboard'])->middleware(['auth', 'gerente'])->name('gerente.dashboard');
