<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/journals', [PageController::class, 'journals'])->name('journals');

Route::get('/journals/{slug}', [PageController::class, 'journalDetails'])->name('journal.details');

Route::get('/submit-manuscript', [PageController::class, 'submit'])->name('submit');

Route::get('/apc', [PageController::class, 'apc'])->name('apc');

Route::get('/editorial-process', [PageController::class, 'editorial'])->name('editorial');

Route::get('/membership', [PageController::class, 'membership'])->name('membership');

Route::get('/guidelines', [PageController::class, 'guidelines'])->name('guidelines');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
