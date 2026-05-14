<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN PROPOSAL
    |--------------------------------------------------------------------------
    */

    public function index()
{
    /*
    |--------------------------------------------------------------------------
    | DATA PROPOSAL
    |--------------------------------------------------------------------------
    */

    $proposals = Proposal::latest()->get();

    /*
    |--------------------------------------------------------------------------
    | STATISTIK
    |--------------------------------------------------------------------------
    */

    $totalProposal = Proposal::count();

    $pendingProposal = Proposal::where(
        'status',
        'Pending'
    )->count();

    $approvedProposal = Proposal::where(
        'status',
        'Disetujui'
    )->count();

    $rejectedProposal = Proposal::where(
        'status',
        'Ditolak'
    )->count();

    /*
    |--------------------------------------------------------------------------
    | RETURN VIEW
    |--------------------------------------------------------------------------
    */

    return view('bemkm.proposal.index', compact(
        'proposals',
        'totalProposal',
        'pendingProposal',
        'approvedProposal',
        'rejectedProposal'
    ));
}

    /*
    |--------------------------------------------------------------------------
    | HALAMAN CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('bemkm.proposal.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE PROPOSAL
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

            'waktu_pelaksanaan' => 'required',

            'nominal' => 'required',

            'file' => 'required|mimes:pdf,doc,docx|max:2048',

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
                'public/proposal',
                $fileName
            );
        }

        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATABASE
        |--------------------------------------------------------------------------
        */

        Proposal::create([

            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'nominal' => $request->nominal,

            'waktu_pelaksanaan' => $request->waktu_pelaksanaan,

            'file' => $fileName,

            'status' => 'Pending',

            'user_id' => auth()->id(),

        ]);

        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('bemkm.proposal.index')
            ->with(
                'success',
                'Proposal berhasil diajukan'
            );
    }
}