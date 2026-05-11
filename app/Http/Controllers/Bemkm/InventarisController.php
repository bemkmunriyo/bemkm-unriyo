<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN INVENTARIS
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | AMBIL DATA INVENTARIS
        |--------------------------------------------------------------------------
        */

        $inventaris = Inventaris::latest()->get();

        /*
        |--------------------------------------------------------------------------
        | TOTAL BARANG
        |--------------------------------------------------------------------------
        */

        $totalBarang = $inventaris->count();

        /*
        |--------------------------------------------------------------------------
        | SEDANG DIPINJAM
        |--------------------------------------------------------------------------
        */

        $sedangDipinjam = $inventaris
                            ->where('status', 'dipinjam')
                            ->count();

        /*
        |--------------------------------------------------------------------------
        | BARANG TERSEDIA
        |--------------------------------------------------------------------------
        */

        $barangTersedia = $totalBarang - $sedangDipinjam;

        /*
        |--------------------------------------------------------------------------
        | BARANG RUSAK
        |--------------------------------------------------------------------------
        */

        $barangRusak = $inventaris
                            ->where('kondisi', 'rusak berat')
                            ->count();

        return view('bemkm.inventaris.index', compact(

            'inventaris',
            'totalBarang',
            'barangTersedia',
            'sedangDipinjam',
            'barangRusak'

        ));
    }

    /*
    |--------------------------------------------------------------------------
    | FORM CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('bemkm.inventaris.create');
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN DATA
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

            'nama_barang' => 'required',

            'stok' => 'required|integer',

            'biaya_pemeliharaan' => 'required|integer',

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);

        /*
        |--------------------------------------------------------------------------
        | UPLOAD GAMBAR
        |--------------------------------------------------------------------------
        */

        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar')
                            ->store('inventaris', 'public');

        }

        /*
        |--------------------------------------------------------------------------
        | SIMPAN INVENTARIS
        |--------------------------------------------------------------------------
        */

        Inventaris::create([

            'nama_barang' => $request->nama_barang,

            'jumlah' => $request->stok,

            'stok' => $request->stok,

            'deskripsi' => $request->deskripsi,

            'biaya_pemeliharaan' => $request->biaya_pemeliharaan,

            'kondisi' => $request->kondisi,

            'status' => $request->status,

            'gambar' => $gambar,

        ]);

        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('bemkm.inventaris.index')
            ->with('success', 'Inventaris berhasil ditambahkan');
    }

    /*
    |--------------------------------------------------------------------------
    | FORM EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $inventaris = Inventaris::findOrFail($id);

        return view('bemkm.inventaris.edit', compact('inventaris'));
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE INVENTARIS
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $inventaris = Inventaris::findOrFail($id);

        $gambar = $inventaris->gambar;

        /*
        |--------------------------------------------------------------------------
        | UPLOAD GAMBAR BARU
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar')
                            ->store('inventaris', 'public');

        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE DATA
        |--------------------------------------------------------------------------
        */

        $inventaris->update([

            'nama_barang' => $request->nama_barang,

            'jumlah' => $request->stok,

            'stok' => $request->stok,

            'deskripsi' => $request->deskripsi,

            'biaya_pemeliharaan' => $request->biaya_pemeliharaan,

            'kondisi' => $request->kondisi,

            'status' => $request->status,

            'gambar' => $gambar,

        ]);

        return redirect()
            ->route('bemkm.inventaris.index')
            ->with('success', 'Inventaris berhasil diupdate');
    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS INVENTARIS
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $inventaris = Inventaris::findOrFail($id);

        $inventaris->delete();

        return redirect()
            ->route('bemkm.inventaris.index')
            ->with('success', 'Inventaris berhasil dihapus');
    }
}