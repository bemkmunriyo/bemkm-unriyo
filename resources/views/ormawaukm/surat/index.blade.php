@extends('ormawaukm.layouts.app')

@section('content')

@if(session('success'))

<div class="mb-6 bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-2xl shadow-sm">

    <div class="flex items-center gap-3">

        <span class="text-2xl">
            ✅
        </span>

        <div>

            <h3 class="font-semibold">
                Berhasil
            </h3>

            <p class="text-sm">
                {{ session('success') }}
            </p>

        </div>

    </div>

</div>

@endif

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Surat Izin Kegiatan
        </h1>

        <p class="text-gray-500 mt-2">
            Pengajuan surat izin kegiatan organisasi mahasiswa kepada BEM KM.
        </p>

    </div>

    <!-- BUTTON -->
    <div>

        <a href="{{ route('ormawaukm.surat.create') }}"
   class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

    + Ajukan Surat

</a>
    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Surat
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                {{ $totalSurat }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📄

            </div>

        </div>

    </div>

    <!-- DISETUJUI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Surat Disetujui
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                {{ $disetujui }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                ✅

            </div>

        </div>

    </div>

    <!-- MENUNGGU -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Menunggu Verifikasi
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                {{ $menunggu }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                ⏳

            </div>

        </div>

    </div>

    <!-- DITOLAK -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Surat Ditolak
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-red-500">
                {{ $ditolak }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center text-2xl">

                ❌

            </div>

        </div>

    </div>

</div>

<!-- FILTER -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 mb-8">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

        <!-- SEARCH -->
        <div class="md:col-span-2">

            <label class="block text-sm font-semibold text-gray-700 mb-3">
                Cari Surat
            </label>

            <input type="text"
                   placeholder="Cari nama kegiatan..."
                   class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

        </div>

        <!-- STATUS -->
        <div>

            <label class="block text-sm font-semibold text-gray-700 mb-3">
                Status Surat
            </label>

            <select
                class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

                <option>Semua Status</option>
                <option>Disetujui</option>
                <option>Menunggu Verifikasi</option>
                <option>Ditolak</option>

            </select>

        </div>

        <!-- BUTTON -->
        <div class="flex items-end">

            <button
                class="w-full bg-[#041C64] hover:bg-[#02113D] text-white py-4 rounded-2xl font-semibold transition">

                Filter Data

            </button>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Riwayat Surat Kegiatan
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Riwayat pengajuan surat izin kegiatan organisasi mahasiswa
        </p>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Nama Kegiatan
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Tempat
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Tanggal Kegiatan
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Catatan
                    </th>

                    <th class="text-center px-6 py-4 text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

@forelse($surats as $surat)

<tr class="border-t hover:bg-gray-50 transition">

    <!-- KEGIATAN -->
    <td class="px-6 py-5">

        <div>

            <h3 class="font-semibold text-[#041C64] text-lg">
                {{ $surat->judul }}
            </h3>

            <p class="text-sm text-gray-500 mt-1">
                {{ $surat->deskripsi }}
            </p>

        </div>

    </td>

    <!-- TEMPAT -->
    <td class="px-6 py-5 text-gray-600">

        {{ $surat->tempat }}

    </td>

    <!-- TANGGAL -->
    <td class="px-6 py-5 text-gray-500">

        {{ \Carbon\Carbon::parse($surat->tanggal_kegiatan)->translatedFormat('d F Y') }}

    </td>

    <!-- STATUS -->
    <td class="px-6 py-5">

        @if($surat->status == 'disetujui')

            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">
                Disetujui
            </span>

        @elseif($surat->status == 'pending')

            <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">
                Menunggu Verifikasi
            </span>

        @else

            <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-xs font-semibold">
                Ditolak
            </span>

        @endif

    </td>

    <!-- CATATAN -->
    <td class="px-6 py-5 text-gray-600">

        {{ $surat->deskripsi }}

    </td>

    <!-- AKSI -->
    <td class="px-6 py-5">

        <div class="flex items-center justify-center gap-3">

            <a href="#"
               class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                Detail

            </a>

        </div>

    </td>

</tr>

@empty

<tr>

    <td colspan="6" class="text-center py-10 text-gray-500">

        Belum ada pengajuan surat.

    </td>

</tr>

@endforelse

</tbody>

        </table>

    </div>

</div>

@endsection