<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAspirasi = Aspirasi::count();

        $aspirasiDiproses = Aspirasi::where(
            'status',
            'Diproses'
        )->count();

        $aspirasiSelesai = Aspirasi::where(
            'status',
            'Selesai'
        )->count();

        $aspirasis = Aspirasi::latest()->paginate(10);

        return view(
            'superadmin.aspirasi.index',
            compact(
                'totalAspirasi',
                'aspirasiDiproses',
                'aspirasiSelesai',
                'aspirasis'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL ASPIRASI
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);

        return view(
            'superadmin.aspirasi.show',
            compact('aspirasi')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE ASPIRASI
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
{
    $aspirasi = Aspirasi::findOrFail($id);

    $request->validate([
        'status' => 'required'
    ]);

    $aspirasi->update([
        'status' => $request->status,
    ]);

    return redirect()
        ->route('superadmin.aspirasi.index')
        ->with(
            'success',
            'Perubahan aspirasi berhasil disimpan.'
        );
}

    /*
    |--------------------------------------------------------------------------
    | HAPUS ASPIRASI
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);

        $aspirasi->delete();

        return redirect()
            ->back()
            ->with(
                'success',
                'Aspirasi berhasil dihapus.'
            );
    }
}