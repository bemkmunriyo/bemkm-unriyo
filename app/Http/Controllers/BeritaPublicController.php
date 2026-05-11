<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaPublicController extends Controller
{
    /**
     * Halaman publik berita
     */
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('berita.index', compact('beritas'));
    }
    public function show($slug)
{
    $berita = \App\Models\Berita::where('slug', $slug)->firstOrFail();

    return view('berita.detail', compact('berita'));
}
}