@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Inventaris BEM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Kelola data inventaris dan perlengkapan organisasi mahasiswa.
        </p>

    </div>

    <!-- BUTTON -->
    <div>

        <button
            class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

            + Tambah Inventaris

        </button>

    </div>

</div>

<!-- FILTER -->
<div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 mb-8">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

        <!-- SEARCH -->
        <div class="md:col-span-2">

            <label class="text-sm font-medium text-gray-600 mb-2 block">
                Cari Barang
            </label>

            <input type="text"
                   placeholder="Cari nama barang..."
                   class="w-full border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-blue-200">

        </div>

        <!-- STATUS -->
        <div>

            <label class="text-sm font-medium text-gray-600 mb-2 block">
                Kondisi
            </label>

            <select
                class="w-full border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-blue-200">

                <option>Semua Kondisi</option>
                <option>Baik</option>
                <option>Rusak Ringan</option>
                <option>Rusak Berat</option>

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
            Total Inventaris
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                35
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">
                📦
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Barang Baik
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                28
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                ✅
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Dipinjam
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                5
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">
                🔄
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Rusak
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

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Daftar Inventaris
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Data inventaris organisasi mahasiswa
        </p>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Nama Barang
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Kategori
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Jumlah
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Kondisi
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

                    <td class="px-6 py-5">

                        <h3 class="font-semibold text-[#041C64]">
                            Proyektor Epson
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Inventaris seminar
                        </p>

                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        Elektronik
                    </td>

                    <td class="px-6 py-5 font-semibold text-[#041C64]">
                        3 Unit
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">
                            Baik
                        </span>

                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">
                            Dipinjam
                        </span>

                    </td>

                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Edit

                            </button>

                            <button
                                class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Hapus

                            </button>

                        </div>

                    </td>

                </tr>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="px-6 py-5">

                        <h3 class="font-semibold text-[#041C64]">
                            Speaker Portable
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Peralatan kegiatan
                        </p>

                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        Audio
                    </td>

                    <td class="px-6 py-5 font-semibold text-[#041C64]">
                        5 Unit
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">
                            Baik
                        </span>

                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">
                            Tersedia
                        </span>

                    </td>

                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Edit

                            </button>

                            <button
                                class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Hapus

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection