<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $beritas = Berita::latest()->get();

        $totalBerita = Berita::count();

        $published = Berita::where(
            'status',
            'published'
        )->count();

        $draft = Berita::where(
            'status',
            'draft'
        )->count();

        return view(
            'bemkm.berita.index',
            compact(
                'beritas',
                'totalBerita',
                'published',
                'draft'
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
        return view('bemkm.berita.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'judul' => 'required',

            'kategori' => 'required',

            'isi' => 'required',

            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',

        ]);

        /*
        |--------------------------------------------------------------------------
        | UPLOAD THUMBNAIL
        |--------------------------------------------------------------------------
        */

        $thumbnail = $request->file('thumbnail');

        $namaThumbnail = time() . '_' . $thumbnail->getClientOriginalName();

        $thumbnail->move(
            public_path('uploads/berita'),
            $namaThumbnail
        );

        /*
        |--------------------------------------------------------------------------
        | SIMPAN BERITA
        |--------------------------------------------------------------------------
        */

        Berita::create([

            'judul' => $request->judul,

            'slug' => Str::slug($request->judul),

            'isi' => $request->isi,

            'thumbnail' => $namaThumbnail,

            'kategori' => $request->kategori,

            'penulis_id' => Auth::id(),

            'status' => 'published',

            'published_at' => now(),

        ]);

        return redirect()
            ->route('bemkm.berita.index')
            ->with(
                'success',
                'Berita berhasil dipublish'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view(
            'bemkm.berita.edit',
            compact('berita')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $request->validate([

            'judul' => 'required',

            'kategori' => 'required',

            'isi' => 'required',

        ]);

        $berita = Berita::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | UPDATE THUMBNAIL
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {

            if ($berita->thumbnail) {

                $oldPath = public_path(
                    'uploads/berita/' . $berita->thumbnail
                );

                if (file_exists($oldPath)) {

                    unlink($oldPath);

                }
            }

            $thumbnail = $request->file('thumbnail');

            $namaThumbnail = time() . '_' . $thumbnail->getClientOriginalName();

            $thumbnail->move(
                public_path('uploads/berita'),
                $namaThumbnail
            );

            $berita->thumbnail = $namaThumbnail;
        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE DATA
        |--------------------------------------------------------------------------
        */

        $berita->judul = $request->judul;

        $berita->slug = Str::slug($request->judul);

        $berita->kategori = $request->kategori;

        $berita->isi = $request->isi;

        $berita->save();

        return redirect()
            ->route('bemkm.berita.index')
            ->with(
                'success',
                'Berita berhasil diupdate'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | DESTROY
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        /*
        |--------------------------------------------------------------------------
        | CARI BERITA
        |--------------------------------------------------------------------------
        */

        $berita = Berita::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | HAPUS THUMBNAIL
        |--------------------------------------------------------------------------
        */

        if ($berita->thumbnail) {

            $path = public_path(
                'uploads/berita/' . $berita->thumbnail
            );

            if (file_exists($path)) {

                unlink($path);

            }
        }

        /*
        |--------------------------------------------------------------------------
        | HAPUS DATA
        |--------------------------------------------------------------------------
        */

        $berita->delete();

        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('bemkm.berita.index')
            ->with(
                'success',
                'Berita berhasil dihapus'
            );
    }
}