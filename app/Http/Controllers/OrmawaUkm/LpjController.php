<?php

namespace App\Http\Controllers\OrmawaUkm;

use App\Http\Controllers\Controller;
use App\Models\Lpj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LpjController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $user = Auth::user();

        $lpjs = Lpj::where(
                    'user_id',
                    $user->id
                )
                ->latest()
                ->get();

        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */

        $totalLpj = $lpjs->count();

        $disetujui = $lpjs->where(
            'status',
            'disetujui'
        )->count();

        $revisi = $lpjs->where(
            'status',
            'revisi'
        )->count();

        $menunggu = $lpjs->where(
            'status',
            'menunggu'
        )->count();

        return view(
            'ormawaukm.lpj.index',
            compact(
                'lpjs',
                'totalLpj',
                'disetujui',
                'revisi',
                'menunggu'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('ormawaukm.lpj.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'judul' => 'required',

            'deskripsi' => 'required',

            'file_lpj' => 'required|file|mimes:pdf,doc,docx|max:2048',

        ]);

        /*
        |--------------------------------------------------------------------------
        | AMBIL FILE
        |--------------------------------------------------------------------------
        */

        $file = $request->file('file_lpj');

        /*
        |--------------------------------------------------------------------------
        | NAMA FILE
        |--------------------------------------------------------------------------
        */

        $namaFile = time() . '_' . $file->getClientOriginalName();

        /*
        |--------------------------------------------------------------------------
        | PINDAHKAN FILE
        |--------------------------------------------------------------------------
        */

        $file->move(

            public_path('uploads/lpj'),

            $namaFile

        );

        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATABASE
        |--------------------------------------------------------------------------
        */

        Lpj::create([

            'user_id' => Auth::id(),

            'nama_kegiatan' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'file' => $namaFile,

            'status' => 'menunggu',

        ]);

        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('ormawaukm.lpj.index')
            ->with(
                'success',
                'LPJ berhasil diupload'
            );
    }
}