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
            Senin, 10 Mei 2026
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
                    15
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📄

            </div>

        </div>

        <p class="text-sm text-green-500 mt-4">
            +3 proposal minggu ini
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
                    8
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                📘

            </div>

        </div>

        <p class="text-sm text-green-500 mt-4">
            +2 LPJ terbaru
        </p>

    </div>

    <!-- INVENTARIS -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    Inventaris BEM
                </p>

                <h2 class="text-4xl font-bold text-yellow-500 mt-4">
                    5
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                📦

            </div>

        </div>

        <p class="text-sm text-yellow-500 mt-4">
            Pengajuan peminjaman aktif
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
                    4
                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center text-2xl">

                💰

            </div>

        </div>

        <p class="text-sm text-red-500 mt-4">
            Perlu pemeriksaan
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
                    Aktivitas pemeriksaan organisasi mahasiswa
                </p>

            </div>

            <!-- LIST -->
            <div class="divide-y divide-gray-100">

                <!-- ITEM -->
                <div class="p-6 flex items-start gap-5">

                    <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl">

                        📄

                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-[#041C64]">
                            Proposal HIMA TI diperiksa
                        </h3>

                        <p class="text-sm text-gray-500 mt-2 leading-7">
                            Pemeriksaan proposal seminar teknologi informasi oleh Komisi B DPM KM.
                        </p>

                        <p class="text-xs text-gray-400 mt-3">
                            10 menit yang lalu
                        </p>

                    </div>

                </div>

                <!-- ITEM -->
                <div class="p-6 flex items-start gap-5">

                    <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                        📘

                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-[#041C64]">
                            LPJ BEM FIKES disetujui
                        </h3>

                        <p class="text-sm text-gray-500 mt-2 leading-7">
                            LPJ kegiatan pelatihan public speaking telah diverifikasi.
                        </p>

                        <p class="text-xs text-gray-400 mt-3">
                            1 jam yang lalu
                        </p>

                    </div>

                </div>

                <!-- ITEM -->
                <div class="p-6 flex items-start gap-5">

                    <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                        📦

                    </div>

                    <div class="flex-1">

                        <h3 class="font-semibold text-[#041C64]">
                            Pengajuan inventaris baru
                        </h3>

                        <p class="text-sm text-gray-500 mt-2 leading-7">
                            DPM KM mengajukan peminjaman proyektor untuk rapat kerja.
                        </p>

                        <p class="text-xs text-gray-400 mt-3">
                            3 jam yang lalu
                        </p>

                    </div>

                </div>

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

                <div>

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-600">
                            Proposal
                        </span>

                        <span class="text-sm font-semibold text-[#041C64]">
                            80%
                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="bg-[#1A46D3] h-3 rounded-full w-[80%]"></div>

                    </div>

                </div>

                <div>

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-600">
                            LPJ
                        </span>

                        <span class="text-sm font-semibold text-green-500">
                            65%
                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="bg-green-500 h-3 rounded-full w-[65%]"></div>

                    </div>

                </div>

                <div>

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-600">
                            Revisi Keuangan
                        </span>

                        <span class="text-sm font-semibold text-yellow-500">
                            40%
                        </span>

                    </div>

                    <div class="w-full bg-gray-200 rounded-full h-3">

                        <div class="bg-yellow-500 h-3 rounded-full w-[40%]"></div>

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

                    Ajukan Proposal

                </a>

                <a href="{{ route('dpmkm.lpj.index') }}"
                   class="block w-full border border-[#1A46D3] text-[#1A46D3] py-4 rounded-2xl text-center font-semibold hover:bg-blue-50 transition">

                    Upload LPJ

                </a>

                <a href="{{ route('dpmkm.inventaris.index') }}"
                   class="block w-full bg-yellow-100 hover:bg-yellow-200 text-yellow-700 py-4 rounded-2xl text-center font-semibold transition">

                    Inventaris BEM KM

                </a>

            </div>

        </div>

    </div>

</div>

@endsection