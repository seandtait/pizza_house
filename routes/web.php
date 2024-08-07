<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/deals', [HomeController::class, 'deals']);
Route::get('/community', [HomeController::class, 'community']);

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
Route::get('/review/edit', [ReviewController::class, 'edit'])->name('review.edit');
Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
