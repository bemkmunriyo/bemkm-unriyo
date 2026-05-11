<?php

namespace App\Http\Controllers\OrmawaUkm;

use App\Http\Controllers\Controller;
use App\Models\Lpj;
use Illuminate\Support\Facades\Auth;

class LpjController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $lpjs = Lpj::where('user_id', $user->id)
                    ->latest()
                    ->get();

        $totalLpj = $lpjs->count();

        $disetujui = $lpjs->where('status', 'disetujui')->count();

        $revisi = $lpjs->where('status', 'revisi')->count();

        $menunggu = $lpjs->where('status', 'pending')->count();

        return view('ormawaukm.lpj.index', compact(
            'lpjs',
            'totalLpj',
            'disetujui',
            'revisi',
            'menunggu'
        ));
    }
}