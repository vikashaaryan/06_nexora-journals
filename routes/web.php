<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\EboardController;
use App\Http\Controllers\Admin\IssueController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\JournalDashboardController;
use App\Http\Controllers\Admin\JournalIndexingController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\SubmitmanuscriptController;
use App\Http\Controllers\Admin\VolumeController;
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

Route::get('/submit-manuscript', [PageController::class, 'manusubmit'])->name('journal.submit');
Route::post('/submit-manuscript', [PageController::class, 'manusubmitStore'])->name('journal.submit.store');
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
        Route::get('/journals/{journal}/submissions', [SubmitmanuscriptController::class, 'index'])
            ->name('journal.submissions.index');

        Route::get('/journals/{journal}/submissions/{manuscript}', [SubmitmanuscriptController::class, 'show'])
            ->name('journal.submissions.show');

        Route::delete('/journals/{journal}/submissions/{manuscript}', [SubmitmanuscriptController::class, 'destroy'])
            ->name('journal.submissions.delete');

        Route::get('/journals/{journal}/volumes', [VolumeController::class, 'index'])->name('admin.journal.volumes.index');
        Route::post('/journals/{journal}/volumes/store', [VolumeController::class, 'store'])->name('admin.journal.volumes.store');
        Route::get('/journals/{journal}/volumes/edit/{volume}', [VolumeController::class, 'edit'])->name('admin.journal.volumes.edit');
        Route::post('/journals/{journal}/volumes/update/{volume}', [VolumeController::class, 'update'])->name('admin.journal.volumes.update');
        Route::delete('/journals/{journal}/volumes/delete/{volume}', [VolumeController::class, 'destroy'])->name('admin.journal.volumes.delete');

        Route::get('/admin/journals/{journal}/issues', [IssueController::class, 'index'])->name('admin.journal.issues.index');
        Route::post('/admin/journals/{journal}/issues/store', [IssueController::class, 'store'])->name('admin.journal.issues.store');
        Route::get('/admin/journals/{journal}/issues/edit/{issue}', [IssueController::class, 'edit'])->name('admin.journal.issues.edit');
        Route::post('/admin/journals/{journal}/issues/update/{issue}', [IssueController::class, 'update'])->name('admin.journal.issues.update');
        Route::delete('/admin/journals/{journal}/issues/delete/{issue}', [IssueController::class, 'destroy'])->name('admin.journal.issues.delete');

        Route::get('/admin/journals/{journal}/articles', [ArticleController::class, 'index'])->name('admin.journal.articles.index');
        Route::get('/admin/journals/{journal}/articles/create', [ArticleController::class, 'create'])->name('admin.journal.articles.create');
        Route::post('/admin/journals/{journal}/articles/store', [ArticleController::class, 'store'])->name('admin.journal.articles.store');
        Route::get('/admin/journals/{journal}/articles/edit/{article}', [ArticleController::class, 'edit'])->name('admin.journal.articles.edit');
        Route::post('/admin/journals/{journal}/articles/update/{article}', [ArticleController::class, 'update'])->name('admin.journal.articles.update');
        Route::delete('/admin/journals/{journal}/articles/delete/{article}', [ArticleController::class, 'destroy'])->name('admin.journal.articles.delete');

        Route::get('/admin/journals/{journal}/eboards', [EboardController::class, 'index'])->name('admin.journal.eboards.index');
        Route::get('/admin/journals/{journal}/eboards/create', [EboardController::class, 'create'])->name('admin.journal.eboards.create');
        Route::post('/admin/journals/{journal}/eboards/store', [EboardController::class, 'store'])->name('admin.journal.eboards.store');
        Route::get('/admin/journals/{journal}/eboards/edit/{eboard}', [EboardController::class, 'edit'])->name('admin.journal.eboards.edit');
        Route::post('/admin/journals/{journal}/eboards/update/{eboard}', [EboardController::class, 'update'])->name('admin.journal.eboards.update');
        Route::delete('/admin/journals/{journal}/eboards/delete/{eboard}', [EboardController::class, 'destroy'])->name('admin.journal.eboards.delete');

    });
});
