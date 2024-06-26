<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergyController;
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
})->name('home');


Route::get('/allergies', [AllergyController::class, 'index'])->name('allergies.index');
Route::get('/allergies', [AllergyController::class, 'filterByCategory'])->name('allergies.index');
Route::get('/family/{id}/detail', [AllergyController::class, 'allergyDetails'])->name('family.detail');

Route::get('/allergies/{id}/edit', [AllergyController::class, 'edit'])->name('allergy.edit');
Route::put('/allergies/{id}', [AllergyController::class, 'update'])->name('allergy.update');

Route::get('/persoon', [PersoonController::class, 'index'])->name('persoon.index');
Route::get('/persoon/klant', [PersoonController::class, 'klant'])->name('persoon.klant');
Route::get('persoon/{id}/edit', [PersoonController::class, 'edit'])->name('persoon.edit');
Route::put('persoon/{id}', [PersoonController::class, 'update'])->name('persoon.update');
