<?php

namespace App\Http\Controllers\OrmawaUkm;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN SURAT
    |--------------------------------------------------------------------------
    */

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
                            ->where('status', 'pending')
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

    /*
    |--------------------------------------------------------------------------
    | FORM AJUKAN SURAT
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('ormawaukm.surat.create');
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN SURAT
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'tempat' => 'required',
        'tanggal_kegiatan' => 'required',
        'jenis_surat' => 'required',
        'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    /*
    |--------------------------------------------------------------------------
    | UPLOAD FILE
    |--------------------------------------------------------------------------
    */

    $fileName = null;

    if ($request->hasFile('file')) {

        $fileName = time() . '.' .
            $request->file('file')->extension();

        $request->file('file')->storeAs(
            'public/surat',
            $fileName
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN DATABASE
    |--------------------------------------------------------------------------
    */

    Surat::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'tempat' => $request->tempat,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'jenis_surat' => $request->jenis_surat,
        'file' => $fileName,
        'status' => 'pending',
        'user_id' => auth()->id(),
    ]);

    return redirect()
        ->route('ormawaukm.surat.index')
        ->with('success', 'Surat berhasil diajukan');
}
}