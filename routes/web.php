<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
    Route::get('/leveranciers/{leverancier}', [LeverancierController::class, 'show'])->name('leveranciers.show');
    Route::get('/leveranciers/filter', [LeverancierController::class, 'filterByType'])->name('leveranciers.filter');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\ProductPerLeverancierController;

Route::get('/leveranciers/{leverancierId}/products/{productId}/edit', [ProductPerLeverancierController::class, 'edit'])->name('productperleverancier.edit');
Route::put('/leveranciers/{leverancierId}/products/{productId}', [ProductPerLeverancierController::class, 'update'])->name('productperleverancier.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
