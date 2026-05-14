<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use App\Models\Surat;

class SuratController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN SURAT MASUK
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $surats = Surat::with('user')
        ->latest()
        ->get();

        $totalSurat = Surat::count();

        $pending = Surat::where('status', 'pending')->count();

        $disetujui = Surat::where('status', 'disetujui')->count();

        $ditolak = Surat::where('status', 'ditolak')->count();

        return view('bemkm.surat.index', compact(
            'surats',
            'totalSurat',
            'pending',
            'disetujui',
            'ditolak'
        ));
    }

    /*
    |--------------------------------------------------------------------------
    | SETUJUI SURAT
    |--------------------------------------------------------------------------
    */

    public function setujui($id)
    {
        $surat = Surat::findOrFail($id);

        $surat->update([
            'status' => 'disetujui'
        ]);

        return back()->with(
            'success',
            'Surat berhasil disetujui'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | TOLAK SURAT
    |--------------------------------------------------------------------------
    */

    public function tolak($id)
    {
        $surat = Surat::findOrFail($id);

        $surat->update([
            'status' => 'ditolak'
        ]);

        return back()->with(
            'success',
            'Surat berhasil ditolak'
        );
    }
}