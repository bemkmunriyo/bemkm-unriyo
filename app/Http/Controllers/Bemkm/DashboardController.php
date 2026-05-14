<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;

use App\Models\Proposal;
use App\Models\Lpj;
use App\Models\Berita;
use App\Models\Inventaris;
use App\Models\Surat;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | DATA STATISTIK DASHBOARD
        |--------------------------------------------------------------------------
        */        
        $proposalCount = Proposal::count();

        $lpjCount = Lpj::count();

        $beritaCount = Berita::count();

        $inventarisCount = Inventaris::count();

        $suratCount = Surat::count();

        /*
        |--------------------------------------------------------------------------
        | DATA TERBARU
        |--------------------------------------------------------------------------
        */

        $proposalTerbaru = Proposal::latest()
            ->take(5)
            ->get();

        $lpjTerbaru = Lpj::latest()
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | RETURN VIEW
        |--------------------------------------------------------------------------
        */

        return view('bemkm.dashboard', compact(
            'proposalCount',
            'lpjCount',
            'beritaCount',
            'inventarisCount',
            'suratCount',
            'proposalTerbaru',
            'lpjTerbaru'
        ));
    }
}