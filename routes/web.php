<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('chi.siamo');
Route::get('/servizi', [PublicController::class, 'services'])->name('servizi');

// Rotte per il blog e dettaglio parametrico
Route::get('/articoli', [PublicController::class, 'blogIndex'])->name('blog.index');
Route::get('/articolo/{id}', [PublicController::class, 'blogShow'])->name('blog.show');