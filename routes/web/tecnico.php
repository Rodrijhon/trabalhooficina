<?php

use App\Http\Controllers\Backend\TecnicoController;
use Illuminate\Support\Facades\Route;

//rota tecnico
Route::get('tecnico/dashboard', [TecnicoController::class, 'dashboard'])->middleware(['auth', 'tecnico'])->name('tecnico.dashboard');
