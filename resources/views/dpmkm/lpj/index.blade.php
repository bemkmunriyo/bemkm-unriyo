@extends('dpmkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            LPJ DPM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Data laporan pertanggungjawaban kegiatan organisasi mahasiswa.
        </p>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total LPJ
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                {{ $totalLpj }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📘

            </div>

        </div>

    </div>

    <!-- DISETUJUI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            LPJ Disetujui
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                {{ $lpjDisetujui }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                ✅

            </div>

        </div>

    </div>

    <!-- REVISI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Revisi LPJ
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                {{ $lpjRevisi }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                ✏️

            </div>

        </div>

    </div>

    <!-- MENUNGGU -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Menunggu Verifikasi
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-blue-500">
                {{ $lpjMenunggu }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl">

                ⏳

            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Daftar LPJ
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Riwayat LPJ organisasi mahasiswa
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
                        Realisasi Dana
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

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($lpjs as $lpj)

                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- KEGIATAN -->
                    <td class="px-6 py-5">

                        <div>

                            <h3 class="font-semibold text-[#041C64] text-lg">

                                {{ $lpj->judul_kegiatan }}

                            </h3>

                            <p class="text-sm text-gray-500 mt-1">

                                {{ $lpj->deskripsi }}

                            </p>

                        </div>

                    </td>

                    <!-- DANA -->
                    <td class="px-6 py-5 font-semibold text-[#041C64]">

                        Rp {{ number_format($lpj->realisasi_dana, 0, ',', '.') }}

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        {{ $lpj->created_at->format('d M Y') }}

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        @if($lpj->status == 'disetujui')

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Disetujui

                        </span>

                        @elseif($lpj->status == 'revisi')

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Revisi

                        </span>

                        @elseif($lpj->status == 'ditolak')

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

                        {{ $lpj->catatan ?? '-' }}

                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex flex-wrap gap-2">

                            <!-- SETUJUI -->
                            <form action="{{ route('dpmkm.lpj.status', $lpj->id) }}"
                                  method="POST">

                                @csrf

                                <input type="hidden"
                                       name="status"
                                       value="disetujui">

                                <button type="submit"
                                        class="bg-green-100 hover:bg-green-200
                                               text-green-700
                                               px-4 py-2
                                               rounded-xl
                                               text-xs
                                               font-semibold
                                               transition">

                                    Setujui

                                </button>

                            </form>

                            <!-- REVISI -->
                            <form action="{{ route('dpmkm.lpj.status', $lpj->id) }}"
                                  method="POST">

                                @csrf

                                <input type="hidden"
                                       name="status"
                                       value="revisi">

                                <button type="submit"
                                        class="bg-yellow-100 hover:bg-yellow-200
                                               text-yellow-700
                                               px-4 py-2
                                               rounded-xl
                                               text-xs
                                               font-semibold
                                               transition">

                                    Revisi

                                </button>

                            </form>

                            <!-- TOLAK -->
                            <form action="{{ route('dpmkm.lpj.status', $lpj->id) }}"
                                  method="POST">

                                @csrf

                                <input type="hidden"
                                       name="status"
                                       value="ditolak">

                                <button type="submit"
                                        class="bg-red-100 hover:bg-red-200
                                               text-red-700
                                               px-4 py-2
                                               rounded-xl
                                               text-xs
                                               font-semibold
                                               transition">

                                    Tolak

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="text-center py-10 text-gray-500">

                        Belum ada LPJ

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection