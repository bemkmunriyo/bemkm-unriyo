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
use App\Http\Controllers\Bemkm\PeminjamanController;

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
use App\Http\Controllers\SuperAdmin\DashboardController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\BeritaPublicController;
use App\Http\Controllers\AspirasiController;


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



/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get(
        '/login',
        [AuthenticatedSessionController::class, 'create']
    )->name('login');

    Route::post(
        '/login',
        [AuthenticatedSessionController::class, 'store']
    );

});

Route::post(
    '/logout',
    [AuthenticatedSessionController::class, 'destroy']
)->middleware('auth')->name('logout');

/*
|--------------------------------------------------------------------------
| BERITA PUBLIK
|--------------------------------------------------------------------------
*/

Route::get(
    '/berita',
    [BeritaPublicController::class, 'index']
)->name('public.berita.index');

Route::get(
    '/berita/{slug}',
    [BeritaPublicController::class, 'show']
)->name('public.berita.detail');

/*
|--------------------------------------------------------------------------
| ASPIRASI PUBLIC
|--------------------------------------------------------------------------
*/

Route::get(
    '/aspirasi',
    [AspirasiController::class, 'index']
)->name('aspirasi');

Route::post(
    '/aspirasi/store',
    [AspirasiController::class, 'store']
)->name('aspirasi.store');

/*
|--------------------------------------------------------------------------
| BEM KM
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'role:bemkm'
])
->prefix('bemkm')
->name('bemkm.')
->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/dashboard',
        [BemDashboardController::class, 'index']
    )->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | PROPOSAL
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/proposal',
        [BemProposalController::class, 'index']
    )->name('proposal.index');

    Route::get(
        '/proposal/create',
        [BemProposalController::class, 'create']
    )->name('proposal.create');

    Route::post(
        '/proposal',
        [BemProposalController::class, 'store']
    )->name('proposal.store');

    /*
    |--------------------------------------------------------------------------
    | LPJ
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/lpj',
        [BemLpjController::class, 'index']
    )->name('lpj.index');

    Route::get(
        '/lpj/create',
        [BemLpjController::class, 'create']
    )->name('lpj.create');

    /*
    |--------------------------------------------------------------------------
    | UPDATE STATUS LPJ
    |--------------------------------------------------------------------------
    */

    Route::patch(
        '/lpj/{id}/status',
        [BemLpjController::class, 'updateStatus']
    )->name('lpj.updateStatus');

    /*
    |--------------------------------------------------------------------------
    | SURAT
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/surat',
        [App\Http\Controllers\Bemkm\SuratController::class, 'index']
    )->name('surat.index');

    Route::put(
        '/surat/{id}/setujui',
        [App\Http\Controllers\Bemkm\SuratController::class, 'setujui']
    )->name('surat.setujui');

    Route::put(
        '/surat/{id}/tolak',
        [App\Http\Controllers\Bemkm\SuratController::class, 'tolak']
    )->name('surat.tolak');

    
/*
|--------------------------------------------------------------------------
| BERITA
|--------------------------------------------------------------------------
*/

Route::get(
    '/berita',
    [BeritaController::class, 'index']
)->name('berita.index');

Route::get(
    '/berita/create',
    [BeritaController::class, 'create']
)->name('berita.create');

Route::get(
    '/berita/{id}/edit',
    [BeritaController::class, 'edit']
)->name('berita.edit');

Route::post(
    '/berita',
    [BeritaController::class, 'store']
)->name('berita.store');

Route::put(
    '/berita/{id}',
    [BeritaController::class, 'update']
)->name('berita.update');

Route::post(
    '/berita/delete/{id}',
    [BeritaController::class, 'destroy']
)->name('berita.destroy');

    /*
    |--------------------------------------------------------------------------
    | INVENTARIS
    |--------------------------------------------------------------------------
    */

    Route::prefix('inventaris')->name('inventaris.')->group(function () {

        /*
        |--------------------------------------------------------------------------
        | INDEX
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/',
            [InventarisController::class, 'index']
        )->name('index');

        /*
        |--------------------------------------------------------------------------
        | CREATE
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/create',
            [InventarisController::class, 'create']
        )->name('create');

        /*
        |--------------------------------------------------------------------------
        | STORE
        |--------------------------------------------------------------------------
        */

        Route::post(
            '/store',
            [InventarisController::class, 'store']
        )->name('store');

        /*
        |--------------------------------------------------------------------------
        | EDIT
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/edit/{id}',
            [InventarisController::class, 'edit']
        )->name('edit');

        /*
        |--------------------------------------------------------------------------
        | UPDATE
        |--------------------------------------------------------------------------
        */

        Route::post(
            '/update/{id}',
            [InventarisController::class, 'update']
        )->name('update');

        /*
        |--------------------------------------------------------------------------
        | DELETE
        |--------------------------------------------------------------------------
        */

        Route::post(
            '/delete/{id}',
            [InventarisController::class, 'destroy']
        )->name('destroy');

    });

    /*
    |--------------------------------------------------------------------------
    | PEMINJAMAN
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/peminjaman',
        [PeminjamanController::class, 'index']
    )->name('peminjaman.index');

    /*
    |--------------------------------------------------------------------------
    | ORGANISASI
    |--------------------------------------------------------------------------
    */

    Route::view(
        '/organisasi',
        'bemkm.organisasi.index'
    )->name('organisasi.index');

});

/*
|--------------------------------------------------------------------------
| DPM KM
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'role:dpm'
])
->prefix('dpmkm')
->name('dpmkm.')
->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/dashboard',
        [\App\Http\Controllers\Dpmkm\DashboardController::class, 'index']
    )->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | PROPOSAL
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/proposal',
        [\App\Http\Controllers\Dpmkm\DashboardController::class, 'proposal']
    )->name('proposal.index');

    /*
    |--------------------------------------------------------------------------
    | PEMERIKSAAN PROPOSAL
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/pemeriksaan/proposal',
        [\App\Http\Controllers\Dpmkm\DashboardController::class, 'pemeriksaanProposal']
    )->name('pemeriksaan.proposal');

    /*
    |--------------------------------------------------------------------------
    | LPJ
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/lpj',
        [\App\Http\Controllers\Dpmkm\DashboardController::class, 'lpj']
    )->name('lpj.index');

    /*
    |--------------------------------------------------------------------------
    | UPDATE STATUS LPJ
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/lpj/status/{id}',
        [\App\Http\Controllers\Dpmkm\DashboardController::class, 'updateLpjStatus']
    )->name('lpj.status');

    /*
    |--------------------------------------------------------------------------
    | PEMERIKSAAN LPJ
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/pemeriksaan/lpj',
        [\App\Http\Controllers\Dpmkm\DashboardController::class, 'pemeriksaanLpj']
    )->name('pemeriksaan.lpj');

    /*
    |--------------------------------------------------------------------------
    | INVENTARIS
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/inventaris',
        [\App\Http\Controllers\Dpmkm\DashboardController::class, 'inventaris']
    )->name('inventaris.index');

});

/*
|--------------------------------------------------------------------------
| ORMAWA & UKM
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'role:ormawa,ukm'
])
->prefix('ormawaukm')
->name('ormawaukm.')
->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/dashboard',
        [OrmawaDashboardController::class, 'index']
    )->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | PROPOSAL
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/proposal',
        [ProposalController::class, 'index']
    )->name('proposal.index');

    Route::post(
        '/proposal',
        [ProposalController::class, 'store']
    )->name('proposal.store');

    /*
    |--------------------------------------------------------------------------
    | SURAT
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/surat',
        [SuratController::class, 'index']
    )->name('surat.index');

    Route::get(
        '/surat/create',
        [SuratController::class, 'create']
    )->name('surat.create');

    Route::post(
        '/surat',
        [SuratController::class, 'store']
    )->name('surat.store');

    /*
    |--------------------------------------------------------------------------
    | LPJ
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/lpj',
        [LpjController::class, 'index']
    )->name('lpj.index');

    Route::get(
        '/lpj/create',
        [LpjController::class, 'create']
    )->name('lpj.create');

    Route::post(
        '/lpj',
        [LpjController::class, 'store']
    )->name('lpj.store');

    /*
    |--------------------------------------------------------------------------
    | INVENTARIS
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/inventaris',
        [OrmawaInventarisController::class, 'index']
    )->name('inventaris.index');

});



/*
|--------------------------------------------------------------------------
| SUPER ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'role:super_admin'
])
->prefix('superadmin')
->name('superadmin.')
->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/dashboard',
        [DashboardController::class, 'index']
    )->name('dashboard');



    /*
|--------------------------------------------------------------------------
| ASPIRASI
|--------------------------------------------------------------------------
*/

Route::get(
    '/aspirasi',
    [DashboardController::class, 'index']
)->name('aspirasi.index');

Route::get(
    '/aspirasi/{id}',
    [DashboardController::class, 'show']
)->name('aspirasi.show');

Route::put(
    '/aspirasi/{id}',
    [DashboardController::class, 'update']
)->name('aspirasi.update');

Route::delete(
    '/aspirasi/{id}',
    [DashboardController::class, 'destroy']
)->name('aspirasi.destroy');



    /*
    |--------------------------------------------------------------------------
    | PROPOSAL & LPJ
    |--------------------------------------------------------------------------
    */

    Route::view(
        '/proposal-lpj',
        'superadmin.proposallpj.index'
    )->name('proposallpj.index');



    /*
    |--------------------------------------------------------------------------
    | INVENTARIS
    |--------------------------------------------------------------------------
    */

    Route::view(
        '/inventaris',
        'superadmin.inventaris.index'
    )->name('inventaris.index');



    /*
    |--------------------------------------------------------------------------
    | AKUN
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'akun',
        AkunController::class
    );

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

    Route::view(
        '/',
        'profile.index'
    )->name('index');

});