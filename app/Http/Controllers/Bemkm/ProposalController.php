<?php

namespace App\Http\Controllers\Bemkm;

use App\Http\Controllers\Controller;
use App\Models\Proposal;

class ProposalController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN PROPOSAL
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $proposals = Proposal::latest()->get();

        $totalProposal = Proposal::count();

        $pendingProposal = Proposal::where('status', 'Pending')->count();

        $approvedProposal = Proposal::where('status', 'Disetujui')->count();

        $rejectedProposal = Proposal::whereIn('status', ['Ditolak', 'Revisi'])->count();

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
}