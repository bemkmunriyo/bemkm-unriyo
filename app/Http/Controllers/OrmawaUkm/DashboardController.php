<?php

namespace App\Http\Controllers\OrmawaUkm;

use App\Http\Controllers\Controller;

use App\Models\Proposal;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | USER LOGIN
        |--------------------------------------------------------------------------
        */

        $user = auth()->user();

        /*
        |--------------------------------------------------------------------------
        | HITUNG PROPOSAL USER LOGIN
        |--------------------------------------------------------------------------
        */

        $countProposal = Proposal::where(
            'user_id',
            auth()->id()
        )->count();

        /*
        |--------------------------------------------------------------------------
        | DATA SEMENTARA
        |--------------------------------------------------------------------------
        */

        $countSurat = 0;
        $countLpj = 0;
        $countInventaris = 0;

        /*
        |--------------------------------------------------------------------------
        | AKTIVITAS TERBARU
        |--------------------------------------------------------------------------
        */

        $aktivitas = Proposal::where(
            'user_id',
            auth()->id()
        )
        ->latest()
        ->take(5)
        ->get();

        /*
        |--------------------------------------------------------------------------
        | RETURN VIEW
        |--------------------------------------------------------------------------
        */

        return view('ormawaukm.dashboard', compact(

            'user',
            'countProposal',
            'countSurat',
            'countLpj',
            'countInventaris',
            'aktivitas'

        ));
    }
}