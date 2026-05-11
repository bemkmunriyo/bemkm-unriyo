@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Peminjaman Inventaris
        </h1>

        <p class="text-gray-500 mt-2">
            Kelola pengajuan peminjaman inventaris organisasi mahasiswa.
        </p>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Pengajuan
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                18
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📦

            </div>

        </div>

    </div>

    <!-- MENUNGGU -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Menunggu ACC
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                5
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                ⏳

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
                10
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                ✅

            </div>

        </div>

    </div>

    <!-- DITOLAK -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Ditolak
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

<!-- FILTER -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 mb-8">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

        <!-- SEARCH -->
        <div class="md:col-span-2">

            <label class="block text-sm font-semibold text-gray-700 mb-3">
                Cari Peminjaman
            </label>

            <input type="text"
                   placeholder="Cari organisasi atau barang..."
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
                <option>Menunggu ACC</option>
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
            Daftar Pengajuan Peminjaman
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Data peminjaman inventaris organisasi mahasiswa
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
                        Barang Dipinjam
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Keperluan
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Tanggal
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

                                🏢

                            </div>

                            <div>

                                <h3 class="font-semibold text-[#041C64] text-lg">
                                    HIMA TI
                                </h3>

                                <p class="text-sm text-gray-500 mt-1">
                                    Fakultas Sains & Teknologi
                                </p>

                            </div>

                        </div>

                    </td>

                    <!-- BARANG -->
                    <td class="px-6 py-5 text-gray-600">

                        Proyektor Epson

                    </td>

                    <!-- KEPERLUAN -->
                    <td class="px-6 py-5">

                        Seminar Teknologi AI

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        12 Mei 2026

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Menunggu ACC

                        </span>

                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

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

                            <!-- DETAIL -->
                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Detail

                            </button>

                        </div>

                    </td>

                </tr>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- ORGANISASI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                                🎓

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

                    <!-- BARANG -->
                    <td class="px-6 py-5 text-gray-600">

                        Speaker Portable

                    </td>

                    <!-- KEPERLUAN -->
                    <td class="px-6 py-5">

                        Pelatihan Public Speaking

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

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <!-- DETAIL -->
                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Detail

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection