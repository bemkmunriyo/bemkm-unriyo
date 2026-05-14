@extends('bemkm.layouts.app')

@section('content')

<div class="space-y-8">

    <!-- HEADER -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">

        <div>

            <h1 class="text-3xl font-bold text-[#041C64]">
                Dashboard BEM KM
            </h1>

            <p class="text-gray-500 text-base mt-2">
                Monitoring proposal, LPJ, surat, dan inventaris organisasi mahasiswa.
            </p>

        </div>

        <div class="bg-white px-5 py-4 rounded-2xl shadow-sm border border-gray-100">

            <p class="text-sm text-gray-500">
                Hari Ini
            </p>

            <h3 class="font-semibold text-[#041C64] mt-1">
                📅 {{ now()->translatedFormat('l, d F Y') }}
            </h3>

        </div>

    </div>

    <!-- STATISTIK RINGKAS -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

        <!-- PROPOSAL -->
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-sm text-gray-500">
                        Proposal
                    </p>

                    <h2 class="text-4xl font-bold text-[#041C64] mt-2">
                        {{ $proposalCount }}
                    </h2>

                </div>

                <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-2xl">
                    📄
                </div>

            </div>

        </div>

        <!-- LPJ -->
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-sm text-gray-500">
                        LPJ
                    </p>

                    <h2 class="text-4xl font-bold text-[#041C64] mt-2">
                        {{ $lpjCount }}
                    </h2>

                </div>

                <div class="w-14 h-14 rounded-2xl bg-yellow-50 flex items-center justify-center text-2xl">
                    📘
                </div>

            </div>

        </div>

        <!-- SURAT -->
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-sm text-gray-500">
                        Surat
                    </p>

                    <h2 class="text-4xl font-bold text-[#041C64] mt-2">
                        {{ $suratCount }}
                    </h2>

                </div>

                <div class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-2xl">
                    📩
                </div>

            </div>

        </div>

        <!-- INVENTARIS -->
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm">

            <div class="flex justify-between items-center">

                <div>

                    <p class="text-sm text-gray-500">
                        Inventaris
                    </p>

                    <h2 class="text-4xl font-bold text-[#041C64] mt-2">
                        {{ $inventarisCount }}
                    </h2>

                </div>

                <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-2xl">
                    📦
                </div>

            </div>

        </div>

    </div>

    <!-- ACCORDION MENU -->
    <div class="space-y-5">

        <!-- PROPOSAL -->
        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm overflow-hidden">

            <details>

                <summary class="list-none cursor-pointer px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-2xl">
                            📄
                        </div>

                        <div>

                            <h2 class="text-xl font-bold text-[#041C64]">
                                Proposal Masuk
                            </h2>

                            <p class="text-sm text-gray-500 mt-1">
                                Daftar proposal terbaru ORMAWA & UKM
                            </p>

                        </div>

                    </div>

                    <div class="flex items-center gap-5">

                        <a href="{{ route('bemkm.proposal.index') }}"
                           class="text-[#1A46D3] font-semibold text-sm hover:underline">
                            Lihat Selengkapnya
                        </a>

                        <span class="text-2xl text-gray-400">
                            ⌄
                        </span>

                    </div>

                </summary>

                <div class="px-6 pb-6 overflow-x-auto">

                    <table class="w-full">

                        <thead>

                            <tr class="border-b text-left">

                                <th class="pb-4 text-sm text-gray-500">
                                    Kegiatan
                                </th>

                                <th class="pb-4 text-sm text-gray-500">
                                    Organisasi
                                </th>

                                <th class="pb-4 text-sm text-gray-500">
                                    Status
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

                            </tr>

                            @empty

                            <tr>

                                <td colspan="3" class="py-8 text-center text-gray-500">
                                    Belum ada proposal masuk
                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </details>

        </div>

        <!-- LPJ -->
        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm overflow-hidden">

            <details>

                <summary class="list-none cursor-pointer px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl bg-yellow-50 flex items-center justify-center text-2xl">
                            📘
                        </div>

                        <div>

                            <h2 class="text-xl font-bold text-[#041C64]">
                                LPJ Masuk
                            </h2>

                            <p class="text-sm text-gray-500 mt-1">
                                Daftar LPJ terbaru organisasi mahasiswa
                            </p>

                        </div>

                    </div>

                    <div class="flex items-center gap-5">

                        <a href="{{ route('bemkm.lpj.index') }}"
                           class="text-[#1A46D3] font-semibold text-sm hover:underline">
                            Lihat Selengkapnya
                        </a>

                        <span class="text-2xl text-gray-400">
                            ⌄
                        </span>

                    </div>

                </summary>

                <div class="px-6 pb-6 overflow-x-auto">

                    <table class="w-full">

                        <thead>

                            <tr class="border-b text-left">

                                <th class="pb-4 text-sm text-gray-500">
                                    Nama Kegiatan
                                </th>

                                <th class="pb-4 text-sm text-gray-500">
                                    Organisasi
                                </th>

                                <th class="pb-4 text-sm text-gray-500">
                                    Status
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($lpjTerbaru as $lpj)

                            <tr class="border-b hover:bg-gray-50 transition">

                                <td class="py-5 font-medium text-[#041C64]">
                                    {{ $lpj->nama_kegiatan ?? '-' }}
                                </td>

                                <td class="text-gray-600">
                                    {{ $lpj->ormawa->nama_ormawa ?? '-' }}
                                </td>

                                <td>

                                    <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">
                                        {{ $lpj->status ?? 'Masuk' }}
                                    </span>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="3" class="py-8 text-center text-gray-500">
                                    Belum ada LPJ masuk
                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </details>

        </div>

        <!-- SURAT -->
        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm overflow-hidden">

            <details>

                <summary class="list-none cursor-pointer px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-2xl">
                            📩
                        </div>

                        <div>

                            <h2 class="text-xl font-bold text-[#041C64]">
                                Surat Masuk
                            </h2>

                            <p class="text-sm text-gray-500 mt-1">
                                Surat kegiatan yang diajukan ORMAWA
                            </p>

                        </div>

                    </div>

                    <div class="flex items-center gap-5">

                        <a href="{{ route('bemkm.surat.index') }}"
                           class="text-[#1A46D3] font-semibold text-sm hover:underline">
                            Lihat Selengkapnya
                        </a>

                        <span class="text-2xl text-gray-400">
                            ⌄
                        </span>

                    </div>

                </summary>

                <div class="px-6 pb-6 text-gray-500">

                    Klik "Lihat Selengkapnya" untuk melihat dan memverifikasi surat masuk.

                </div>

            </details>

        </div>

        <!-- INVENTARIS -->
        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm overflow-hidden">

            <details>

                <summary class="list-none cursor-pointer px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-2xl">
                            📦
                        </div>

                        <div>

                            <h2 class="text-xl font-bold text-[#041C64]">
                                Peminjaman Inventaris
                            </h2>

                            <p class="text-sm text-gray-500 mt-1">
                                Monitoring peminjaman inventaris organisasi
                            </p>

                        </div>

                    </div>

                    <div class="flex items-center gap-5">

                        <a href="{{ route('bemkm.inventaris.index') }}"
                           class="text-[#1A46D3] font-semibold text-sm hover:underline">
                            Lihat Selengkapnya
                        </a>

                        <span class="text-2xl text-gray-400">
                            ⌄
                        </span>

                    </div>

                </summary>

                <div class="px-6 pb-6 text-gray-500">

                    Klik "Lihat Selengkapnya" untuk melihat inventaris dan peminjaman.

                </div>

            </details>

        </div>

    </div>

</div>

@endsection
```
