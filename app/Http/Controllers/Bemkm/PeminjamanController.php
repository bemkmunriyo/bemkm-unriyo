<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PeminjamanInventaris;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = PeminjamanInventaris::all();
        return view('bemkm.peminjaman.index', compact('data'));
    }

    public function approve($id)
    {
        $data = PeminjamanInventaris::findOrFail($id);
        $data->status = 'disetujui';
        $data->save();

        return back();
    }

    public function reject($id)
    {
        $data = PeminjamanInventaris::findOrFail($id);
        $data->status = 'ditolak';
        $data->save();

        return back();
    }
}