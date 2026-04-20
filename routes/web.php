<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\JournalDashboardController;
use App\Http\Controllers\Admin\JournalIndexingController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/journals', [PageController::class, 'journals'])->name('journals');
Route::get('/journals/{journal}', [PageController::class, 'journalDetails'])->name('journal.details');
Route::get('/journals/{journal}/{menu}', [PageController::class, 'journalMenuPage'])->name('journal.menu.page');

Route::get('/journals/{journal}/submit-manuscript', [PageController::class, 'submit'])->name('journal.submit');
Route::post('/journals/{journal}/submit-manuscript', [PageController::class, 'submitStore'])->name('journal.submit.store');
Route::get('/apc', [PageController::class, 'apc'])->name('apc');
Route::get('/editorial-process', [PageController::class, 'editorial'])->name('editorial');
Route::get('/membership', [PageController::class, 'membership'])->name('membership');
Route::get('/guidelines', [PageController::class, 'guidelines'])->name('guidelines');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

    Route::middleware('admin')->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Admin Common Routes
        |--------------------------------------------------------------------------
        */
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

        /*
        |--------------------------------------------------------------------------
        | Journal Master Routes
        |--------------------------------------------------------------------------
        */
        Route::get('/journals', [JournalController::class, 'index'])->name('admin.journals');
        Route::get('/journal/create', [JournalController::class, 'create'])->name('admin.journal.create');
        Route::post('/journal/store', [JournalController::class, 'store'])->name('admin.journal.store');
        Route::get('/journal/edit/{journal}', [JournalController::class, 'edit'])->name('admin.journal.edit');
        Route::post('/journal/update/{journal}', [JournalController::class, 'update'])->name('admin.journal.update');
        Route::delete('/journal/delete/{journal}', [JournalController::class, 'destroy'])->name('admin.journal.delete');

        /*
        |--------------------------------------------------------------------------
        | Selected Journal Dashboard
        |--------------------------------------------------------------------------
        */
        Route::get('/journals/{journal}/dashboard', [JournalDashboardController::class, 'dashboard'])->name('admin.journal.dashboard');

        /*
        |--------------------------------------------------------------------------
        | Selected Journal Pages
        |--------------------------------------------------------------------------
        */ Route::get('/journals/{journal}/pages', [PagesController::class, 'index'])->name('admin.journal.pages.index');
        Route::get('/journals/{journal}/pages/create', [PagesController::class, 'create'])->name('admin.journal.pages.create');
        Route::post('/journals/{journal}/pages/store', [PagesController::class, 'store'])->name('admin.journal.pages.store');
        Route::get('/journals/{journal}/pages/edit/{page}', [PagesController::class, 'edit'])->name('admin.journal.pages.edit');
        Route::post('/journals/{journal}/pages/update/{page}', [PagesController::class, 'update'])->name('admin.journal.pages.update');
        Route::delete('/journals/{journal}/pages/delete/{page}', [PagesController::class, 'destroy'])->name('admin.journal.pages.delete');

        /*
        |--------------------------------------------------------------------------
        | Selected Journal Menus
        |--------------------------------------------------------------------------
        */
        Route::get('/journals/{journal}/menus', [MenuController::class, 'index'])->name('admin.journal.menus.index');
        Route::get('/journals/{journal}/menus/create', [MenuController::class, 'create'])->name('admin.journal.menus.create');
        Route::post('/journals/{journal}/menus/store', [MenuController::class, 'store'])->name('admin.journal.menus.store');
        Route::get('/journals/{journal}/menus/edit/{menu}', [MenuController::class, 'edit'])->name('admin.journal.menus.edit');
        Route::post('/journals/{journal}/menus/update/{menu}', [MenuController::class, 'update'])->name('admin.journal.menus.update');
        Route::delete('/journals/{journal}/menus/delete/{menu}', [MenuController::class, 'destroy'])->name('admin.journal.menus.delete');

        /*
        |--------------------------------------------------------------------------
        | Selected Journal Abstracting & Indexing
        |--------------------------------------------------------------------------
        */ Route::get('/journals/{journal}/indexings', [JournalIndexingController::class, 'index'])->name('admin.journal.indexings.index');
        Route::get('/journals/{journal}/indexings/create', [JournalIndexingController::class, 'create'])->name('admin.journal.indexings.create');
        Route::post('/journals/{journal}/indexings/store', [JournalIndexingController::class, 'store'])->name('admin.journal.indexings.store');
        Route::get('/journals/{journal}/indexings/edit/{journalIndexing}', [JournalIndexingController::class, 'edit'])->name('admin.journal.indexings.edit');
        Route::post('/journals/{journal}/indexings/update/{journalIndexing}', [JournalIndexingController::class, 'update'])->name('admin.journal.indexings.update');
        Route::delete('/journals/{journal}/indexings/delete/{journalIndexing}', [JournalIndexingController::class, 'destroy'])->name('admin.journal.indexings.delete');

        /*
        |--------------------------------------------------------------------------
        | Future Selected Journal Routes
        |--------------------------------------------------------------------------
        */
        Route::get('/journals/{journal}/eboards', function () {
            return 'Journal Eboards';
        })->name('admin.journal.eboards.index');

        Route::get('/journals/{journal}/issues', function () {
            return 'Journal Issues';
        })->name('admin.journal.issues.index');

        Route::get('/journals/{journal}/volumes', function () {
            return 'Journal Volumes';
        })->name('admin.journal.volumes.index');

        Route::get('/journals/{journal}/submissions', function () {
            return 'Journal Submissions';
        })->name('admin.journal.submissions.index');

        Route::get('/journals/{journal}/publications', function () {
            return 'Journal Publications';
        })->name('admin.journal.publications.index');

        Route::get('/journals/{journal}/logos', function () {
            return 'Journal Logos';
        })->name('admin.journal.logos.index');

        Route::get('/journals/{journal}/contact-settings', function () {
            return 'Journal Contact Settings';
        })->name('admin.journal.contact-settings.index');

        Route::get('/journals/{journal}/seo', function () {
            return 'Journal SEO Settings';
        })->name('admin.journal.seo.index');

        Route::get('/journals/{journal}/appearance', function () {
            return 'Journal Appearance';
        })->name('admin.journal.appearance.index');
    });
});
