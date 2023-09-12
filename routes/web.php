<?php

use App\Http\Controllers\Configuracion\EmpresaController;
use App\Http\Controllers\Configuracion\PerfilController;
use App\Http\Controllers\Configuracion\PermisoController;
use App\Http\Controllers\Configuracion\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // Configuracion
    Route::get('perfil',[PerfilController::class,'perfil'])->name('perfil');
    Route::get('empresa',[EmpresaController::class,'empresa'])->name('empresa');
    Route::get('permisos',[PermisoController::class,'permiso'])->name('permiso');



    Route::get('users',[UserController::class,'index'])->name('users');
    Route::get('roles',[RolController::class,'index'])->name('roles');
    Route::get('/rol/collection',[RolController::class,'collection'])->name('rol');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
