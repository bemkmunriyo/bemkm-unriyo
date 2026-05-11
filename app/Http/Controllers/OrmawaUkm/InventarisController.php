<?php

namespace App\Http\Controllers\OrmawaUkm;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | DATA INVENTARIS BEM KM
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

        return view('ormawaukm.inventaris.index', compact(

            'inventaris',
            'totalBarang',
            'barangTersedia',
            'sedangDipinjam',
            'barangRusak'

        ));
    }
}