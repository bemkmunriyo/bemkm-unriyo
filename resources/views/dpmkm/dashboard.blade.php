@extends('dpmkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Dashboard DPM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Sistem pengawasan proposal, LPJ, dan inventaris organisasi mahasiswa.
        </p>

    </div>

    <!-- DATE -->
    <div class="bg-white px-6 py-4 rounded-2xl shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Hari Ini
        </p>

        <h3 class="font-bold text-[#041C64] mt-1">
            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
        </h3>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- PROPOSAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    Proposal Masuk
                </p>

                <h2 class="text-4xl font-bold text-[#041C64] mt-4">
                    {{ $totalProposal }}
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📄

            </div>

        </div>

        <p class="text-sm text-green-500 mt-4">
            Proposal organisasi mahasiswa
        </p>

    </div>

    <!-- LPJ -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    LPJ Masuk
                </p>

                <h2 class="text-4xl font-bold text-green-500 mt-4">
                    {{ $totalLpj }}
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                📘

            </div>

        </div>

        <p class="text-sm text-green-500 mt-4">
            LPJ organisasi mahasiswa
        </p>

    </div>

    <!-- INVENTARIS -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    Inventaris Dipinjam
                </p>

                <h2 class="text-4xl font-bold text-yellow-500 mt-4">
                    {{ $inventarisDipinjam }}
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                📦

            </div>

        </div>

        <p class="text-sm text-yellow-500 mt-4">
            Inventaris sedang digunakan
        </p>

    </div>

    <!-- REVISI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    Revisi Keuangan
                </p>

                <h2 class="text-4xl font-bold text-red-500 mt-4">
                    {{ $revisiKeuangan }}
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center text-2xl">

                💰

            </div>

        </div>

        <p class="text-sm text-red-500 mt-4">
            Menunggu pemeriksaan
        </p>

    </div>

</div>

<!-- GRID -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

    <!-- LEFT -->
    <div class="xl:col-span-2 space-y-8">

        <!-- AKTIVITAS -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100">

            <!-- HEADER -->
            <div class="px-6 py-5 border-b border-gray-100">

                <h2 class="text-2xl font-bold text-[#041C64]">
                    Aktivitas Terbaru
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Aktivitas terbaru organisasi mahasiswa
                </p>

            </div>

            <!-- LIST -->
            <div class="divide-y divide-gray-100">

                @forelse($proposalTerbaru as $proposal)

                <div class="p-6 flex items-start gap-5">

                    <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl">

                        📄

                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-[#041C64]">

                            {{ $proposal->judul_kegiatan }}

                        </h3>

                        <p class="text-sm text-gray-500 mt-2 leading-7">

                            Proposal terbaru yang diajukan organisasi mahasiswa.

                        </p>

                        <p class="text-xs text-gray-400 mt-3">

                            {{ $proposal->created_at->diffForHumans() }}

                        </p>

                    </div>

                </div>

                @empty

                <div class="p-8 text-center text-gray-500">

                    Belum ada aktivitas terbaru

                </div>

                @endforelse

            </div>

        </div>

    </div>

    <!-- RIGHT -->
    <div class="space-y-8">

        <!-- STATUS -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">

            <h2 class="text-2xl font-bold text-[#041C64] mb-6">
                Status Pemeriksaan
            </h2>

            <!-- ITEM -->
            <div class="space-y-5">

                <!-- PROPOSAL -->
                <div>

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-600">
                            Proposal
                        </span>

                        <span class="text-sm font-semibold text-[#041C64]">
                            {{ $proposalSelesai }}%
                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="bg-[#1A46D3] h-3 rounded-full"
                             style="width: {{ $proposalSelesai }}%"></div>

                    </div>

                </div>

                <!-- LPJ -->
                <div>

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-600">
                            LPJ
                        </span>

                        <span class="text-sm font-semibold text-green-500">
                            {{ $lpjSelesai }}%
                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="bg-green-500 h-3 rounded-full"
                             style="width: {{ $lpjSelesai }}%"></div>

                    </div>

                </div>

                <!-- REVISI -->
                <div>

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-600">
                            Revisi Keuangan
                        </span>

                        <span class="text-sm font-semibold text-yellow-500">
                            {{ $revisiProgress }}%
                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="bg-yellow-500 h-3 rounded-full"
                             style="width: {{ $revisiProgress }}%"></div>

                    </div>

                </div>

            </div>

        </div>

        <!-- QUICK ACTION -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">

            <h2 class="text-2xl font-bold text-[#041C64] mb-6">
                Aksi Cepat
            </h2>

            <div class="space-y-4">

                <a href="{{ route('dpmkm.proposal.index') }}"
                   class="block w-full bg-[#1A46D3] hover:bg-[#1238B3] text-white py-4 rounded-2xl text-center font-semibold transition">

                    Pemeriksaan Proposal

                </a>

                <a href="{{ route('dpmkm.lpj.index') }}"
                   class="block w-full border border-[#1A46D3] text-[#1A46D3] py-4 rounded-2xl text-center font-semibold hover:bg-blue-50 transition">

                    Pemeriksaan LPJ

                </a>

                <a href="{{ route('dpmkm.inventaris.index') }}"
                   class="block w-full bg-yellow-100 hover:bg-yellow-200 text-yellow-700 py-4 rounded-2xl text-center font-semibold transition">

                    Data Inventaris

                </a>

            </div>

        </div>

    </div>

</div>

@endsection