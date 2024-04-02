<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::prefix('cars')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('cars.index');
    Route::get('/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/', [CarController::class, 'store'])->name('cars.store');
    Route::get('/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('/{car}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/{car}', [CarController::class, 'destroy'])->name('cars.delete');
});
