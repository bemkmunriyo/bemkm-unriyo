<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| BEM KM
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Bemkm\DashboardController as BemDashboardController;
use App\Http\Controllers\Bemkm\BeritaController;
use App\Http\Controllers\Bemkm\InventarisController;
use App\Http\Controllers\Bemkm\ProposalController as BemProposalController;
use App\Http\Controllers\Bemkm\LpjController as BemLpjController;

/*
|--------------------------------------------------------------------------
| ORMAWA & UKM
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\OrmawaUkm\DashboardController as OrmawaDashboardController;
use App\Http\Controllers\OrmawaUkm\ProposalController;
use App\Http\Controllers\OrmawaUkm\SuratController;
use App\Http\Controllers\OrmawaUkm\LpjController;
use App\Http\Controllers\OrmawaUkm\InventarisController as OrmawaInventarisController;

/*
|--------------------------------------------------------------------------
| SUPER ADMIN
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\SuperAdmin\AkunController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\BeritaPublicController;

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/aspirasi', function () {
    return view('aspirasi');
})->name('aspirasi');

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| BERITA PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/berita', [BeritaPublicController::class, 'index'])
    ->name('berita.index');

Route::get('/berita/{slug}', [BeritaPublicController::class, 'show'])
    ->name('berita.detail');

/*
|--------------------------------------------------------------------------
| BEM KM
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('bemkm')
    ->name('bemkm.')
    ->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [BemDashboardController::class, 'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | PROPOSAL
    |--------------------------------------------------------------------------
    */

    Route::get('/proposal', [BemProposalController::class, 'index'])
        ->name('proposal.index');

    Route::get('/proposal/create', [BemProposalController::class, 'create'])
        ->name('proposal.create');

    /*
    |--------------------------------------------------------------------------
    | LPJ
    |--------------------------------------------------------------------------
    */

    Route::get('/lpj', [BemLpjController::class, 'index'])
        ->name('lpj.index');

    Route::get('/lpj/create', [BemLpjController::class, 'create'])
        ->name('lpj.create');

    /*
    |--------------------------------------------------------------------------
    | BERITA
    |--------------------------------------------------------------------------
    */

    Route::prefix('berita')->group(function () {

        Route::get('/', [BeritaController::class, 'index'])
            ->name('berita.index');

        Route::get('/create', [BeritaController::class, 'create'])
            ->name('berita.create');

    });

    /*
    |--------------------------------------------------------------------------
    | INVENTARIS
    |--------------------------------------------------------------------------
    */

    Route::resource('inventaris', InventarisController::class);

    /*
    |--------------------------------------------------------------------------
    | PEMINJAMAN
    |--------------------------------------------------------------------------
    */

    Route::view('/peminjaman', 'bemkm.peminjaman.index')
        ->name('peminjaman.index');

    /*
    |--------------------------------------------------------------------------
    | ORGANISASI
    |--------------------------------------------------------------------------
    */

    Route::view('/organisasi', 'bemkm.organisasi.index')
        ->name('organisasi.index');

});

/*
|--------------------------------------------------------------------------
| DPM KM
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('dpmkm')
    ->name('dpmkm.')
    ->group(function () {

    Route::view('/dashboard', 'dpmkm.dashboard')
        ->name('dashboard');

    Route::view('/proposal', 'dpmkm.proposal.index')
        ->name('proposal.index');

    Route::view('/lpj', 'dpmkm.lpj.index')
        ->name('lpj.index');

    Route::view('/inventaris', 'dpmkm.inventaris.index')
        ->name('inventaris.index');

});

/*
|--------------------------------------------------------------------------
| ORMAWA & UKM
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('ormawaukm')
    ->name('ormawaukm.')
    ->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [OrmawaDashboardController::class, 'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | PROPOSAL
    |--------------------------------------------------------------------------
    */

    Route::get('/proposal', [ProposalController::class, 'index'])
        ->name('proposal.index');

    Route::post('/proposal', [ProposalController::class, 'store'])
        ->name('proposal.store');

    /*
    |--------------------------------------------------------------------------
    | SURAT
    |--------------------------------------------------------------------------
    */

    Route::get('/surat', [SuratController::class, 'index'])
        ->name('surat.index');

    /*
    |--------------------------------------------------------------------------
    | LPJ
    |--------------------------------------------------------------------------
    */

    Route::get('/lpj', [LpjController::class, 'index'])
        ->name('lpj.index');

    /*
    |--------------------------------------------------------------------------
    | INVENTARIS
    |--------------------------------------------------------------------------
    */

    Route::get('/inventaris', [OrmawaInventarisController::class, 'index'])
        ->name('inventaris.index');

});

/*
|--------------------------------------------------------------------------
| SUPER ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('superadmin')
    ->name('superadmin.')
    ->group(function () {

    Route::view('/dashboard', 'superadmin.dashboard')
        ->name('dashboard');

    Route::view('/aspirasi', 'superadmin.aspirasi.index')
        ->name('aspirasi.index');

    Route::view('/proposal-lpj', 'superadmin.proposallpj.index')
        ->name('proposallpj.index');

    Route::view('/inventaris', 'superadmin.inventaris.index')
        ->name('inventaris.index');

    Route::resource('/akun', AkunController::class);

});

/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('profile')
    ->name('profile.')
    ->group(function () {

    Route::view('/', 'profile.index')
        ->name('index');

});