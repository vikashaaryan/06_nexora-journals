<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/journals', [PageController::class, 'journals'])->name('journals');

Route::get('/journals/details', [PageController::class, 'journalDetails'])->name('journal.details');

Route::get('/submit-manuscript', [PageController::class, 'submit'])->name('submit');

Route::get('/apc', [PageController::class, 'apc'])->name('apc');

Route::get('/editorial-process', [PageController::class, 'editorial'])->name('editorial');

Route::get('/membership', [PageController::class, 'membership'])->name('membership');

Route::get('/guidelines', [PageController::class, 'guidelines'])->name('guidelines');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminAuthController::class,'loginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class,'login'])->name('admin.login.submit');

    Route::middleware('admin')->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard');

        Route::post('/logout', [AdminAuthController::class,'logout'])->name('admin.logout');
        Route::get('/journal/create', [JournalController::class, 'journalcreate'])->name('admin.journal.create');
    Route::post('/journal/store', [JournalController::class, 'journalstore'])->name('admin.journal.store');

    Route::get('/journal/manage', [JournalController::class, 'journalindex'])->name('admin.journal.index');

    Route::get('/journal/edit/{journal}', [JournalController::class, 'journaledit'])->name('admin.journal.edit');
    Route::post('/journal/update/{journal}', [JournalController::class, 'journalupdate'])->name('admin.journal.update');

    Route::delete('/journal/delete/{journal}', [JournalController::class, 'journaldestroy'])->name('admin.journal.delete');

    });

});