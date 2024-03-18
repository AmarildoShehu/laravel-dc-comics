<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('#');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// Route per il form
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Route per l'oggetto singolo
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Route per la modifica
Route::get('comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.update');

// Route POST per caricare il nuovo fumetto
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Route per cancellare
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');