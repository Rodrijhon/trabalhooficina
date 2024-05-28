<?php

use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;


//routa user
Route::get('user/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'user'])->name('user.dashboard');
