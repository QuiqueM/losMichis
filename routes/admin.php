<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ADmin\MascotaController;
use App\Http\Controllers\Admin\VeterinarioController;
use App\Http\Controllers\Citacontroller;
use App\Http\Controllers\ClienteController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::get('show', [HomeController::class, 'show'])->name('admin.show');
Route::resource('veterinarios', VeterinarioController::class)->only(['index', 'show'])->names('admin.veterinarios');
Route::resource('clientes', ClienteController::class)->names('admin.clientes');
Route::resource('mascotas', MascotaController::class)->names('admin.mascotas');
Route::resource('citas', Citacontroller::class)->only(['index','create', 'store'])->names('admin.citas');