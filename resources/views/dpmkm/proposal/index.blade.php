@extends('dpmkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Pengajuan Proposal DPM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Ajukan proposal kegiatan DPM KM kepada BEM KM Universitas Respati Yogyakarta.
        </p>

    </div>

    <!-- BUTTON -->
    <div class="flex items-center gap-4">

        <button
            class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

            + Ajukan Proposal

        </button>

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
                12
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
                7
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
                3
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
                2
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
                Cari Proposal
            </label>

            <input type="text"
                   placeholder="Cari nama kegiatan..."
                   class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

        </div>

        <!-- STATUS -->
        <div>

            <label class="block text-sm font-semibold text-gray-700 mb-3">
                Status Proposal
            </label>

            <select
                class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

                <option>Semua Status</option>
                <option>Disetujui</option>
                <option>Menunggu Verifikasi</option>
                <option>Revisi</option>
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
            Daftar Proposal DPM KM
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Riwayat pengajuan proposal kepada BEM KM
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
                        Tanggal Pengajuan
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Catatan BEM KM
                    </th>

                    <th class="text-center px-6 py-4 text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- KEGIATAN -->
                    <td class="px-6 py-5">

                        <div>

                            <h3 class="font-semibold text-[#041C64] text-lg">
                                Rapat Kerja DPM KM
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Program kerja tahunan organisasi
                            </p>

                        </div>

                    </td>

                    <!-- ANGGARAN -->
                    <td class="px-6 py-5 font-semibold text-[#041C64]">

                        Rp 5.000.000

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        10 Mei 2026

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Disetujui

                        </span>

                    </td>

                    <!-- CATATAN -->
                    <td class="px-6 py-5 text-gray-600">

                        Proposal telah diverifikasi dan disetujui.

                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Detail

                            </button>

                        </div>

                    </td>

                </tr>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- KEGIATAN -->
                    <td class="px-6 py-5">

                        <div>

                            <h3 class="font-semibold text-[#041C64] text-lg">
                                Seminar Legislasi Mahasiswa
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Seminar penguatan organisasi mahasiswa
                            </p>

                        </div>

                    </td>

                    <!-- ANGGARAN -->
                    <td class="px-6 py-5 font-semibold text-[#041C64]">

                        Rp 7.500.000

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        08 Mei 2026

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Revisi

                        </span>

                    </td>

                    <!-- CATATAN -->
                    <td class="px-6 py-5 text-gray-600">

                        Revisi pada rincian anggaran konsumsi kegiatan.

                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <button
                                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Edit Proposal

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection