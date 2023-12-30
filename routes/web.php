<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LandingController;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [LandingController::class, 'index'])->name('backend.productos.index');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('backend.dashboard.index');

    Route::group(['prefix' => 'productos'], function () {
        Route::get('/', [ProductoController::class, 'index'])->name('backend.productos.index');
        Route::get('/create', [ProductoController::class, 'create'])->name('backend.productos.create');
        Route::post('store', [ProductoController::class, 'store'])->name('backend.productos.store');
        Route::get('edit/{id}', [ProductoController::class, 'edit'])->name('backend.productos.edit');
        Route::post('update', [ProductoController::class, 'update'])->name('backend.productos.update');
        Route::post('delete', [ProductoController::class, 'delete'])->name('backend.productos.delete');
    });
});
