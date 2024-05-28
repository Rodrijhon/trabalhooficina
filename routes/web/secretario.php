<?php

use App\Http\Controllers\Backend\SecretarioController;
use Illuminate\Support\Facades\Route;

Route::get('secretario/dashboard', [SecretarioController::class, 'dashboard'])->middleware(['auth', 'secretario'])->name('secretario.dashboard');
