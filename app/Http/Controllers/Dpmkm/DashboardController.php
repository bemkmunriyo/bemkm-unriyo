<?php

namespace App\Http\Controllers\Dpmkm;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\Lpj;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $totalProposal = Proposal::count();

        $totalLpj = Lpj::count();

        $totalInventaris = Inventaris::count();

        $revisiKeuangan = Proposal::where(
            'status',
            'revisi'
        )->count();

        $inventarisDipinjam = Inventaris::where(
            'status',
            'dipinjam'
        )->count();

        $proposalTerbaru = Proposal::latest()
            ->take(3)
            ->get();

        $proposalSelesai = $totalProposal > 0
            ? round(
                (
                    Proposal::where('status', 'disetujui')->count()
                    / $totalProposal
                ) * 100
            )
            : 0;

        $lpjSelesai = $totalLpj > 0
            ? round(
                (
                    Lpj::where('status', 'disetujui')->count()
                    / $totalLpj
                ) * 100
            )
            : 0;

        $revisiProgress = $totalProposal > 0
            ? round(
                ($revisiKeuangan / $totalProposal) * 100
            )
            : 0;

        return view(
            'dpmkm.dashboard',
            compact(
                'totalProposal',
                'totalLpj',
                'totalInventaris',
                'revisiKeuangan',
                'inventarisDipinjam',
                'proposalTerbaru',
                'proposalSelesai',
                'lpjSelesai',
                'revisiProgress'
            )
        );
    }

    public function proposal()
{
    /*
    |--------------------------------------------------------------------------
    | AMBIL DATA PROPOSAL
    |--------------------------------------------------------------------------
    */

    $proposals = \App\Models\Proposal::latest()->get();

    /*
    |--------------------------------------------------------------------------
    | STATISTIK
    |--------------------------------------------------------------------------
    */

    $totalProposal = $proposals->count();

    $proposalDisetujui = $proposals
        ->where('status', 'disetujui')
        ->count();

    $proposalRevisi = $proposals
        ->where('status', 'revisi')
        ->count();

    $proposalDitolak = $proposals
        ->where('status', 'ditolak')
        ->count();

    /*
    |--------------------------------------------------------------------------
    | VIEW
    |--------------------------------------------------------------------------
    */

    return view(
        'dpmkm.proposal.index',
        compact(
            'proposals',
            'totalProposal',
            'proposalDisetujui',
            'proposalRevisi',
            'proposalDitolak'
        )
    );
}

    public function lpj()
{
    /*
    |--------------------------------------------------------------------------
    | AMBIL DATA LPJ
    |--------------------------------------------------------------------------
    */

    $lpjs = \App\Models\Lpj::latest()->get();

    /*
    |--------------------------------------------------------------------------
    | STATISTIK
    |--------------------------------------------------------------------------
    */

    $totalLpj = $lpjs->count();

    $lpjDisetujui = $lpjs
        ->where('status', 'disetujui')
        ->count();

    $lpjRevisi = $lpjs
        ->where('status', 'revisi')
        ->count();

    $lpjMenunggu = $lpjs
        ->where('status', 'menunggu')
        ->count();

    /*
    |--------------------------------------------------------------------------
    | VIEW
    |--------------------------------------------------------------------------
    */

    return view(
        'dpmkm.lpj.index',
        compact(
            'lpjs',
            'totalLpj',
            'lpjDisetujui',
            'lpjRevisi',
            'lpjMenunggu'
        )
    );
}
/*
|--------------------------------------------------------------------------
| UPDATE STATUS LPJ
|--------------------------------------------------------------------------
*/

public function updateLpjStatus(Request $request, $id)
{
    $lpj = \App\Models\Lpj::findOrFail($id);

    $lpj->update([

        'status' => $request->status

    ]);

    return redirect()
        ->back()
        ->with(
            'success',
            'Status LPJ berhasil diperbarui'
        );
}

    /*
    |--------------------------------------------------------------------------
    | INVENTARIS
    |--------------------------------------------------------------------------
    */

    public function inventaris()
    {
        return view('dpmkm.inventaris.index');
    }
}