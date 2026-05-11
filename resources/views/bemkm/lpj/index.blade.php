@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Laporan Pertanggungjawaban (LPJ)
        </h1>

        <p class="text-gray-500 mt-2">
            Kelola dan verifikasi LPJ kegiatan organisasi mahasiswa.
        </p>

    </div>

    <!-- BUTTON -->
    <div class="flex items-center gap-4">

        <button
            class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

            + Upload LPJ

        </button>

    </div>

</div>

<!-- FILTER -->
<div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 mb-8">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

        <!-- SEARCH -->
        <div class="md:col-span-2">

            <label class="text-sm font-medium text-gray-600 mb-2 block">
                Cari LPJ
            </label>

            <input type="text"
                   placeholder="Cari nama kegiatan..."
                   class="w-full border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-blue-200">

        </div>

        <!-- STATUS -->
        <div>

            <label class="text-sm font-medium text-gray-600 mb-2 block">
                Status
            </label>

            <select
                class="w-full border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-blue-200">

                <option>Semua Status</option>
                <option>Menunggu Verifikasi</option>
                <option>Disetujui</option>
                <option>Revisi</option>
                <option>Ditolak</option>

            </select>

        </div>

        <!-- BUTTON -->
        <div class="flex items-end">

            <button
                class="w-full bg-[#041C64] hover:bg-[#02113D] text-white py-3 rounded-2xl font-semibold transition">

                Filter Data

            </button>

        </div>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total LPJ
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                18
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">
                📘
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Menunggu Verifikasi
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                6
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">
                ⏳
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Disetujui
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                9
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                ✅
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Revisi / Ditolak
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-red-500">
                3
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
    <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center">

        <div>

            <h2 class="text-2xl font-bold text-[#041C64]">
                Daftar LPJ
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Data laporan pertanggungjawaban kegiatan organisasi mahasiswa
            </p>

        </div>

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
                        Organisasi
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Dana Digunakan
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Tanggal
                    </th>

                    <th class="text-center px-6 py-4 text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="px-6 py-5">

                        <h3 class="font-semibold text-[#041C64]">
                            Seminar Teknologi AI
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            LPJ kegiatan seminar nasional
                        </p>

                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        HIMA TI
                    </td>

                    <td class="px-6 py-5 font-semibold text-[#041C64]">
                        Rp 3.200.000
                    </td>

                    <td class="px-6 py-5">

                        <span
                            class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Menunggu Verifikasi

                        </span>

                    </td>

                    <td class="px-6 py-5 text-gray-500">
                        10 Mei 2026
                    </td>

                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <button
                                class="bg-green-100 hover:bg-green-200 text-green-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                ACC

                            </button>

                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Revisi

                            </button>

                            <button
                                class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Tolak

                            </button>

                        </div>

                    </td>

                </tr>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="px-6 py-5">

                        <h3 class="font-semibold text-[#041C64]">
                            Bakti Sosial Desa
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            LPJ kegiatan pengabdian masyarakat
                        </p>

                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        KORMA
                    </td>

                    <td class="px-6 py-5 font-semibold text-[#041C64]">
                        Rp 4.500.000
                    </td>

                    <td class="px-6 py-5">

                        <span
                            class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Disetujui

                        </span>

                    </td>

                    <td class="px-6 py-5 text-gray-500">
                        08 Mei 2026
                    </td>

                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <button
                                class="bg-gray-100 text-gray-500 px-4 py-2 rounded-xl text-sm font-semibold cursor-not-allowed">

                                Selesai

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection