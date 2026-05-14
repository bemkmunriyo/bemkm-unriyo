<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | DATA PEMINJAMAN
        |--------------------------------------------------------------------------
        */

        $peminjamans = Peminjaman::latest()->get();

        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */

        $totalPeminjaman = Peminjaman::count();

        $pendingPeminjaman = Peminjaman::where(
            'status',
            'Menunggu ACC'
        )->count();

        $approvedPeminjaman = Peminjaman::where(
            'status',
            'Disetujui'
        )->count();

        $rejectedPeminjaman = Peminjaman::where(
            'status',
            'Ditolak'
        )->count();

        /*
        |--------------------------------------------------------------------------
        | VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'bemkm.peminjaman.index',
            compact(
                'peminjamans',
                'totalPeminjaman',
                'pendingPeminjaman',
                'approvedPeminjaman',
                'rejectedPeminjaman'
            )
        );
    }
}