@extends('ormawaukm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex items-center justify-between mb-8">

    <div>

        <h1 class="text-4xl font-black text-[#041C64]">

            Proposal {{ auth()->user()->name }}

        </h1>

        <p class="text-slate-500 mt-2">

            Pengajuan proposal organisasi mahasiswa

        </p>

    </div>

</div>

<!-- FORM -->
<div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8 mb-8">

    <form action="{{ route('ormawaukm.proposal.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-6">

        @csrf

        <!-- JUDUL -->
        <div>

            <label class="block font-semibold mb-3">

                Judul Proposal

            </label>

            <input
                type="text"
                name="judul"
                required
                class="w-full border border-slate-200 rounded-2xl px-5 py-4">

        </div>

        <!-- DESKRIPSI -->
        <div>

            <label class="block font-semibold mb-3">

                Deskripsi Proposal

            </label>

            <textarea
                name="deskripsi"
                rows="5"
                required
                class="w-full border border-slate-200 rounded-2xl px-5 py-4"></textarea>

        </div>

        <!-- FILE -->
        <div>

            <label class="block font-semibold mb-3">

                Upload Proposal

            </label>

            <input
                type="file"
                name="file"
                class="w-full border border-slate-200 rounded-2xl px-5 py-4">

        </div>

        <!-- BUTTON -->
        <button
            class="bg-[#041C64] hover:bg-[#02113D]
            text-white px-8 py-4 rounded-2xl font-bold">

            Ajukan Proposal

        </button>

    </form>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">

    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-slate-50">

                <tr>

                    <th class="px-6 py-5 text-left">
                        Judul
                    </th>

                    <th class="px-6 py-5 text-left">
                        Status
                    </th>

                    <th class="px-6 py-5 text-left">
                        Tanggal
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($proposals as $proposal)

                <tr class="border-t">

                    <td class="px-6 py-5">

                        {{ $proposal->judul }}

                    </td>

                    <td class="px-6 py-5">

                        <span class="px-4 py-2 rounded-xl text-sm font-semibold

                        @if($proposal->status == 'pending')
                            bg-yellow-100 text-yellow-700
                        @elseif($proposal->status == 'disetujui')
                            bg-green-100 text-green-700
                        @elseif($proposal->status == 'ditolak')
                            bg-red-100 text-red-700
                        @else
                            bg-blue-100 text-blue-700
                        @endif

                        ">

                            {{ ucfirst($proposal->status) }}

                        </span>

                    </td>

                    <td class="px-6 py-5">

                        {{ $proposal->created_at->format('d M Y') }}

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="3"
                        class="text-center py-10 text-slate-500">

                        Belum ada proposal diajukan.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection