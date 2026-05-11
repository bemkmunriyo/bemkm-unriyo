@extends('ormawaukm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="mb-10">

    <div class="flex items-center justify-between flex-wrap gap-6">

        <!-- LEFT -->
        <div>

            <h1 class="text-4xl font-black text-[#041C64] leading-tight">

                Selamat Datang,
                <span class="text-amber-500">

                    {{ $user->name }}

                </span>

            </h1>

            <p class="text-slate-500 mt-3 text-lg">

                Dashboard {{ strtoupper($user->role) }}
                Universitas Respati Yogyakarta

            </p>

        </div>

        <!-- PROFILE -->
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 px-6 py-5">

            <div class="flex items-center gap-4">

                <!-- ICON -->
                <div class="w-16 h-16 rounded-2xl
                bg-gradient-to-br from-blue-900 to-blue-700
                flex items-center justify-center
                text-white text-2xl font-black shadow-lg">

                    {{ strtoupper(substr($user->name, 0, 1)) }}

                </div>

                <!-- INFO -->
                <div>

                    <h3 class="font-black text-slate-800 text-lg">

                        {{ $user->name }}

                    </h3>

                    <p class="text-slate-500 text-sm">

                        Username:
                        {{ $user->username }}

                    </p>

                    <span class="inline-block mt-2
                    bg-amber-100 text-amber-700
                    px-3 py-1 rounded-xl text-xs font-bold">

                        {{ strtoupper($user->role) }}

                    </span>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- SURAT -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    Surat Izin
                </p>

                <h2 class="text-4xl font-bold text-[#041C64] mt-4">

                    {{ $countSurat }}

                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl
            bg-[#EEF3FF]
            flex items-center justify-center text-2xl">

                📄

            </div>

        </div>

        <p class="text-sm text-green-500 mt-4">

            Surat organisasi diajukan

        </p>

    </div>

    <!-- PROPOSAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    Proposal
                </p>

                <h2 class="text-4xl font-bold text-green-500 mt-4">

                    {{ $countProposal }}

                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl
            bg-green-100
            flex items-center justify-center text-2xl">

                📘

            </div>

        </div>

        <p class="text-sm text-yellow-500 mt-4">

            Proposal organisasi aktif

        </p>

    </div>

    <!-- LPJ -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    LPJ
                </p>

                <h2 class="text-4xl font-bold text-yellow-500 mt-4">

                    {{ $countLpj }}

                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl
            bg-yellow-100
            flex items-center justify-center text-2xl">

                📙

            </div>

        </div>

        <p class="text-sm text-blue-500 mt-4">

            LPJ kegiatan organisasi

        </p>

    </div>

    <!-- INVENTARIS -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-start">

            <div>

                <p class="text-sm text-gray-500">
                    Inventaris
                </p>

                <h2 class="text-4xl font-bold text-red-500 mt-4">

                    {{ $countInventaris }}

                </h2>

            </div>

            <div class="w-14 h-14 rounded-2xl
            bg-red-100
            flex items-center justify-center text-2xl">

                📦

            </div>

        </div>

        <p class="text-sm text-red-500 mt-4">

            Inventaris dipinjam

        </p>

    </div>

</div>

<!-- AKTIVITAS -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">

            Aktivitas {{ $user->name }}

        </h2>

        <p class="text-sm text-gray-500 mt-1">

            Aktivitas organisasi terbaru

        </p>

    </div>

    <!-- LIST -->
    <div class="divide-y divide-gray-100">

        @forelse($aktivitas as $proposal)

        <div class="p-6 flex items-start gap-5">

            <div class="w-14 h-14 rounded-2xl
            bg-green-100
            flex items-center justify-center text-2xl">

                📘

            </div>

            <div class="flex-1">

                <h3 class="font-semibold text-[#041C64]">

                    Proposal:
                    {{ $proposal->judul }}

                </h3>

                <p class="text-sm text-gray-500 mt-2 leading-7">

                    {{ $proposal->deskripsi }}

                </p>

                <p class="text-xs text-gray-400 mt-3">

                    {{ $proposal->created_at->diffForHumans() }}

                </p>

            </div>

        </div>

        @empty

        <div class="p-10 text-center text-slate-500">

            Belum ada aktivitas organisasi.

        </div>

        @endforelse

    </div>

</div>

@endsection