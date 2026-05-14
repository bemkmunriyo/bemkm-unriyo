@extends('dpmkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Pemeriksaan Proposal ORMAWA
        </h1>

        <p class="text-gray-500 mt-2">
            Pemeriksaan proposal kegiatan organisasi mahasiswa oleh DPM KM.
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
                24
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📄

            </div>

        </div>

    </div>

    <!-- MENUNGGU -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Menunggu Pemeriksaan
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                8
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                ⏳

            </div>

        </div>

    </div>

    <!-- REVISI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Revisi Proposal
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-blue-500">
                5
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl">

                ✏️

            </div>

        </div>

    </div>

    <!-- DISETUJUI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Disetujui
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                11
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                ✅

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
                   placeholder="Cari nama kegiatan atau organisasi..."
                   class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

        </div>

        <!-- STATUS -->
        <div>

            <label class="block text-sm font-semibold text-gray-700 mb-3">
                Status
            </label>

            <select
                class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

                <option>Semua Status</option>
                <option>Menunggu</option>
                <option>Revisi</option>
                <option>Disetujui</option>
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
            Daftar Proposal ORMAWA
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Pemeriksaan proposal kegiatan organisasi mahasiswa
        </p>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Organisasi
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Nama Kegiatan
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

                    <th class="text-center px-6 py-4 text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- ORGANISASI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                                💻

                            </div>

                            <div>

                                <h3 class="font-semibold text-[#041C64] text-lg">
                                    HIMA TI
                                </h3>

                                <p class="text-sm text-gray-500 mt-1">
                                    Teknik Informatika
                                </p>

                            </div>

                        </div>

                    </td>

                    <!-- KEGIATAN -->
                    <td class="px-6 py-5">

                        Seminar Teknologi AI

                    </td>

                    <!-- ANGGARAN -->
                    <td class="px-6 py-5 font-semibold text-[#041C64]">

                        Rp 8.500.000

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        10 Mei 2026

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Menunggu Pemeriksaan

                        </span>

                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <!-- DETAIL -->
                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Detail

                            </button>

                            <!-- REVISI -->
                            <button
                                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Revisi

                            </button>

                            <!-- ACC -->
                            <button
                                class="bg-green-100 hover:bg-green-200 text-green-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                ACC

                            </button>

                            <!-- TOLAK -->
                            <button
                                class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Tolak

                            </button>

                        </div>

                    </td>

                </tr>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- ORGANISASI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center gap-4">

                            <div class="w-20 h-20
            flex items-center justify-center">

    <img src="{{ asset('storage/logokabinet.png') }}"
         alt="Logo UNRIYO"
         class="w-20 h-20 object-contain">

</div>

                            <div>

                                <h3 class="font-semibold text-[#041C64] text-lg">
                                    BEM FIKES
                                </h3>

                                <p class="text-sm text-gray-500 mt-1">
                                    Fakultas Ilmu Kesehatan
                                </p>

                            </div>

                        </div>

                    </td>

                    <!-- KEGIATAN -->
                    <td class="px-6 py-5">

                        Pelatihan Public Speaking

                    </td>

                    <!-- ANGGARAN -->
                    <td class="px-6 py-5 font-semibold text-[#041C64]">

                        Rp 6.000.000

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        08 Mei 2026

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Revisi Proposal

                        </span>

                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <!-- DETAIL -->
                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Detail

                            </button>

                            <!-- EDIT -->
                            <button
                                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Edit Revisi

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection