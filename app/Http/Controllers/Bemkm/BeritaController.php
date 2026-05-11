<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Tampilkan semua berita
     */
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('bemkm.berita.index', compact('beritas'));
    }

    /**
     * Form tambah berita
     */
    public function create()
    {
        return view('bemkm.berita.create');
    }

    /**
     * Simpan berita baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'kategori' => 'nullable|string|max:100',
        ]);

        $judul = $request->judul;

        // slug unik sederhana
        $slug = Str::slug($judul) . '-' . time();

        Berita::create([
            'judul' => $judul,
            'slug' => $slug,
            'isi' => $request->isi,
            'kategori' => $request->kategori,
            'thumbnail' => null,
            'penulis_id' => Auth::id() ?? 1,
            'status' => 'published',
            'published_at' => now(),
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil dipublish!');
    }

    /**
     * Form edit berita
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('bemkm.berita.edit', compact('berita'));
    }

    /**
     * Update berita
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'kategori' => 'nullable|string|max:100',
        ]);

        $berita = Berita::findOrFail($id);

        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil diupdate!');
    }

    /**
     * Hapus berita
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}