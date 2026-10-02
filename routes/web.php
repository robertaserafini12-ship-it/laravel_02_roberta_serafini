<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// Rotte per le pagine statiche gestite dal PublicController
Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('chi.siamo');
Route::get('/servizi', [PublicController::class, 'services'])->name('servizi');

// Rotte per il blog e dettaglio parametrico gestite dall'ArticleController
Route::get('/articoli', [ArticleController::class, 'index'])->name('blog.index');
Route::get('/articolo/{id}', [ArticleController::class, 'show'])->name('blog.show');