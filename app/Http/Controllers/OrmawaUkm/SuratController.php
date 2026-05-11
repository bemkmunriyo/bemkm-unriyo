<?php

namespace App\Http\Controllers\OrmawaUkm;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function index()
    {
        // USER LOGIN
        $user = Auth::user();

        /*
        |--------------------------------------------------------------------------
        | DATA SURAT USER LOGIN
        |--------------------------------------------------------------------------
        */

        $surats = Surat::where('user_id', $user->id)
                        ->latest()
                        ->get();

        /*
        |--------------------------------------------------------------------------
        | STATISTIK REAL
        |--------------------------------------------------------------------------
        */

        $totalSurat = Surat::where('user_id', $user->id)
                            ->count();

        $disetujui = Surat::where('user_id', $user->id)
                            ->where('status', 'disetujui')
                            ->count();

        $menunggu = Surat::where('user_id', $user->id)
                            ->where('status', 'menunggu')
                            ->count();

        $ditolak = Surat::where('user_id', $user->id)
                            ->where('status', 'ditolak')
                            ->count();

        /*
        |--------------------------------------------------------------------------
        | KIRIM KE VIEW
        |--------------------------------------------------------------------------
        */

        return view('ormawaukm.surat.index', compact(
            'surats',
            'totalSurat',
            'disetujui',
            'menunggu',
            'ditolak'
        ));
    }
}