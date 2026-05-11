@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Selamat Datang, Administrator 👋
        </h1>

        <p class="text-gray-500 text-base mt-2">
            Kelola organisasi dan kegiatan mahasiswa dengan mudah dan terintegrasi.
        </p>

    </div>

    <div class="text-[#1A46D3] font-medium text-sm bg-white px-5 py-3 rounded-2xl shadow-sm border border-gray-100">
        📅 {{ now()->translatedFormat('l, d F Y') }}
    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <!-- PROPOSAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-gray-500 text-sm">
                    Proposal Masuk
                </p>

                <h2 class="text-4xl font-bold text-[#041C64] mt-3">
                    {{ $proposalCount }}
                </h2>

                <p class="text-green-500 text-sm font-medium mt-3">
                    Total proposal dari seluruh ORMAWA
                </p>

            </div>

            <div class="w-16 h-16 rounded-2xl bg-[#EEF3FF] text-3xl flex items-center justify-center">
                📄
            </div>

        </div>

    </div>

    <!-- LPJ -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-gray-500 text-sm">
                    LPJ Masuk
                </p>

                <h2 class="text-4xl font-bold text-[#041C64] mt-3">
                    {{ $lpjCount }}
                </h2>

                <p class="text-green-500 text-sm font-medium mt-3">
                    Total LPJ dari seluruh ORMAWA
                </p>

            </div>

            <div class="w-16 h-16 rounded-2xl bg-[#FFF5D8] text-3xl flex items-center justify-center">
                📘
            </div>

        </div>

    </div>

    <!-- BERITA -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-gray-500 text-sm">
                    Berita Publish
                </p>

                <h2 class="text-4xl font-bold text-[#041C64] mt-3">
                    {{ $beritaCount }}
                </h2>

                <p class="text-green-500 text-sm font-medium mt-3">
                    Total berita yang dipublikasikan
                </p>

            </div>

            <div class="w-16 h-16 rounded-2xl bg-[#EEF3FF] text-3xl flex items-center justify-center">
                📰
            </div>

        </div>

    </div>

    <!-- INVENTARIS -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-gray-500 text-sm">
                    Inventaris
                </p>

                <h2 class="text-4xl font-bold text-[#041C64] mt-3">
                    {{ $inventarisCount }}
                </h2>

                <p class="text-green-500 text-sm font-medium mt-3">
                    Total inventaris organisasi
                </p>

            </div>

            <div class="w-16 h-16 rounded-2xl bg-[#FFF5D8] text-3xl flex items-center justify-center">
                📦
            </div>

        </div>

    </div>

</div>

<!-- CONTENT GRID -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">

    <!-- PROPOSAL TERBARU -->
    <div class="xl:col-span-2 bg-white rounded-3xl shadow-sm border border-gray-100 p-6">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-6">

            <div>

                <h2 class="text-2xl font-bold text-[#041C64]">
                    Proposal Terbaru
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Daftar proposal terbaru organisasi mahasiswa
                </p>

            </div>

            <a href="{{ route('bemkm.proposal.index') }}"
               class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-5 py-3 rounded-2xl text-sm font-semibold transition">
                Lihat Semua
            </a>

        </div>

        <!-- TABLE -->
        <div class="overflow-x-auto">

            <table class="w-full">

                <thead>

                    <tr class="border-b text-left">

                        <th class="pb-4 text-sm text-gray-500 font-semibold">
                            Kegiatan
                        </th>

                        <th class="pb-4 text-sm text-gray-500 font-semibold">
                            Organisasi
                        </th>

                        <th class="pb-4 text-sm text-gray-500 font-semibold">
                            Status
                        </th>

                        <th class="pb-4 text-sm text-gray-500 font-semibold">
                            Tanggal
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($proposalTerbaru as $proposal)

                    <tr class="border-b hover:bg-gray-50 transition">

                        <td class="py-5 font-medium text-[#041C64]">
                            {{ $proposal->nama_kegiatan }}
                        </td>

                        <td class="text-gray-600">
                            {{ $proposal->ormawa->nama_ormawa ?? '-' }}
                        </td>

                        <td>

                            <span class="px-4 py-2 rounded-full text-xs font-semibold
                                @if($proposal->status == 'Pending') bg-yellow-100 text-yellow-700
                                @elseif($proposal->status == 'Disetujui') bg-green-100 text-green-700
                                @else bg-blue-100 text-blue-700
                                @endif">

                                {{ $proposal->status }}

                            </span>

                        </td>

                        <td class="text-gray-500">
                            {{ $proposal->created_at->format('d M Y') }}
                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="4" class="py-6 text-center text-gray-500">
                            Belum ada proposal masuk
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <!-- LPJ SECTION -->
        <div class="mt-10">

            <div class="flex justify-between items-center mb-6">

                <div>

                    <h2 class="text-2xl font-bold text-[#041C64]">
                        LPJ Terbaru
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Daftar LPJ terbaru organisasi mahasiswa
                    </p>

                </div>

                <a href="{{ route('bemkm.lpj.index') }}"
                   class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-5 py-3 rounded-2xl text-sm font-semibold transition">
                    Lihat Semua
                </a>

            </div>

        </div>

    </div>

    <!-- AKSI CEPAT -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">

        <h2 class="text-2xl font-bold text-[#041C64] mb-6">
            Aksi Cepat
        </h2>

        <div class="space-y-4">

            <!-- UPLOAD PROPOSAL -->
            <a href="{{ route('bemkm.proposal.create') }}"
               class="block w-full bg-[#1A46D3] hover:bg-[#1238B3] text-white py-4 rounded-2xl font-semibold transition text-center">

                + Upload Proposal ke DPM

            </a>

            <!-- UPLOAD LPJ -->
            <a href="{{ route('bemkm.lpj.create') }}"
               class="block w-full border border-[#1A46D3] text-[#1A46D3] py-4 rounded-2xl font-semibold hover:bg-blue-50 transition text-center">

                Upload LPJ ke DPM

            </a>

            <!-- BERITA -->
            <a href="{{ route('bemkm.berita.create') }}"
               class="block w-full border border-[#1A46D3] text-[#1A46D3] py-4 rounded-2xl font-semibold hover:bg-blue-50 transition text-center">

                Buat Berita

            </a>

            <!-- INVENTARIS -->
            <a href="{{ route('bemkm.inventaris.create') }}"
               class="block w-full border border-[#1A46D3] text-[#1A46D3] py-4 rounded-2xl font-semibold hover:bg-blue-50 transition text-center">

                Tambah Inventaris

            </a>

        </div>

    </div>

</div>

@endsection