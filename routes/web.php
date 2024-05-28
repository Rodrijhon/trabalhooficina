<?php

//use App\Http\Controllers\Backend\AdminController;
//use App\Http\Controllers\Backend\SecretarioController;
//use App\Http\Controllers\Backend\GerenteController;
//use App\Http\Controllers\Backend\TecnicoController;
//use App\Http\Controllers\Backend\UserController;
//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

//Chamando rotas MSFLIX Organizadas 
foreach(File::allfiles(__DIR__.'/web') as $route_file){
    require $route_file->getPathname();

}
require __DIR__.'/auth.php';

//rota admin
//Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'admin'])->name('admin.dashboard');

//rota secretario
//Route::get('secretario/dashboard', [SecretarioController::class, 'dashboard'])->middleware(['auth', 'secretario'])->name('secretario.dashboard');

//rota tecnico
//Route::get('tecnico/dashboard', [TecnicoController::class, 'dashboard'])->middleware(['auth', 'tecnico'])->name('tecnico.dashboard');

//routa user
//Route::get('user/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'user'])->name('user.dashboard');

// rota gerente
//Route::get('gerente/dashboard', [GerenteController::class, 'dashboard'])->middleware(['auth', 'gerente'])->name('gerente.dashboard');
