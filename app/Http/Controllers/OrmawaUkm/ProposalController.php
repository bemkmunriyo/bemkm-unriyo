<?php

namespace App\Http\Controllers\OrmawaUkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Proposal;

class ProposalController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | AMBIL PROPOSAL MILIK USER LOGIN
        |--------------------------------------------------------------------------
        */

        $proposals = Proposal::where(
            'user_id',
            auth()->id()
        )->latest()->get();

        return view(
            'ormawaukm.proposal.index',
            compact('proposals')
        );
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
            'file' => 'nullable|mimes:pdf,doc,docx|max:2048',

        ]);

        /*
        |--------------------------------------------------------------------------
        | UPLOAD FILE
        |--------------------------------------------------------------------------
        */

        $file = null;

        if ($request->hasFile('file')) {

            $file = $request->file('file')
                ->store('proposal', 'public');

        }

        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATA
        |--------------------------------------------------------------------------
        */

        Proposal::create([

            'user_id' => auth()->id(),

            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'file' => $file,

            'status' => 'pending',

        ]);

        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('ormawaukm.proposal.index')
            ->with('success', 'Proposal berhasil diajukan');
    }
}