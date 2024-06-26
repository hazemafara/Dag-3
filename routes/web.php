<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPerLeverancierController;
use App\Http\Controllers\ContactPerLeverancierController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
    Route::get('/leveranciers/filter', [LeverancierController::class, 'filterByType'])->name('leveranciers.filter');
    Route::get('/leveranciers/show/{leverancier}', [LeverancierController::class, 'show'])->name('leveranciers.show');

    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // edit ProductPerLeverancierController
    // edit en update methoden
    Route::get('/product_per_leverancier/{id}/edit', [ProductPerLeverancierController::class, 'edit'])->name('product_per_leverancier.edit');
    Route::patch('/product_per_leverancier/{id}', [ProductPerLeverancierController::class, 'update'])->name('product_per_leverancier.update');

    Route::resource('contact-per-leverancier', ContactPerLeverancierController::class);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
