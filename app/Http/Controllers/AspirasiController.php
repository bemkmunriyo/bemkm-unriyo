<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN ASPIRASI
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('aspirasi');
    }



    /*
    |--------------------------------------------------------------------------
    | SIMPAN ASPIRASI
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'nama' => 'required',
            'nim' => 'required',
            'kategori' => 'required',
            'isi_aspirasi' => 'required',

        ]);



        Aspirasi::create([

            'nama' => $request->nama,
            'nim' => $request->nim,
            'kategori' => $request->kategori,
            'isi_aspirasi' => $request->isi_aspirasi,
            'status' => 'Menunggu'

        ]);



        return redirect()
            ->back()
            ->with(
                'success',
                'Aspirasi berhasil dikirim!'
            );
    }



    /*
    |--------------------------------------------------------------------------
    | DASHBOARD SUPER ADMIN
    |--------------------------------------------------------------------------
    */

    public function dashboard()
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
            'superadmin.dashboard',
            compact(
                'totalAspirasi',
                'aspirasiDiproses',
                'aspirasiSelesai',
                'aspirasis'
            )
        );
    }
}