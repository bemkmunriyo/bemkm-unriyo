@extends('dpmkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Proposal DPM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Data proposal kegiatan organisasi mahasiswa yang diajukan kepada BEM KM.
        </p>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Proposal
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                {{ $totalProposal }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📄

            </div>

        </div>

    </div>

    <!-- DISETUJUI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Proposal Disetujui
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                {{ $proposalDisetujui }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                ✅

            </div>

        </div>

    </div>

    <!-- REVISI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Revisi Proposal
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                {{ $proposalRevisi }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                ✏️

            </div>

        </div>

    </div>

    <!-- DITOLAK -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Proposal Ditolak
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-red-500">
                {{ $proposalDitolak }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center text-2xl">

                ❌

            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Daftar Proposal
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Riwayat pengajuan proposal organisasi mahasiswa
        </p>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Kegiatan
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Anggaran
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Tanggal
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Catatan
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($proposals as $proposal)

                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- KEGIATAN -->
                    <td class="px-6 py-5">

                        <div>

                            <h3 class="font-semibold text-[#041C64] text-lg">

                                {{ $proposal->judul_kegiatan }}

                            </h3>

                            <p class="text-sm text-gray-500 mt-1">

                                {{ $proposal->deskripsi }}

                            </p>

                        </div>

                    </td>

                    <!-- ANGGARAN -->
                    <td class="px-6 py-5 font-semibold text-[#041C64]">

                        Rp {{ number_format($proposal->nominal, 0, ',', '.') }}

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        {{ $proposal->created_at->format('d M Y') }}

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        @if($proposal->status == 'disetujui')

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Disetujui

                        </span>

                        @elseif($proposal->status == 'revisi')

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Revisi

                        </span>

                        @elseif($proposal->status == 'ditolak')

                        <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Ditolak

                        </span>

                        @else

                        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Menunggu

                        </span>

                        @endif

                    </td>

                    <!-- CATATAN -->
                    <td class="px-6 py-5 text-gray-600">

                        {{ $proposal->catatan ?? '-' }}

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5"
                        class="text-center py-10 text-gray-500">

                        Belum ada proposal

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection