@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Detail Inventaris
        </h1>

        <p class="text-gray-500 mt-2">
            Informasi lengkap data inventaris organisasi mahasiswa.
        </p>

    </div>

    <!-- BUTTON -->
    <div class="flex items-center gap-4">

        <a href="{{ route('bemkm.inventaris.index') }}"
           class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-2xl font-semibold transition">

            ← Kembali

        </a>

        <button
            class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold transition">

            Edit Data

        </button>

    </div>

</div>

<!-- DETAIL -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

    <!-- LEFT -->
    <div class="xl:col-span-2 space-y-8">

        <!-- INFORMASI -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

            <div class="flex items-center justify-between mb-8">

                <div>

                    <h2 class="text-2xl font-bold text-[#041C64]">
                        Informasi Barang
                    </h2>

                    <p class="text-gray-500 mt-1">
                        Data lengkap inventaris
                    </p>

                </div>

                <div class="w-20 h-20 rounded-3xl bg-[#EEF3FF] flex items-center justify-center text-4xl">
                    📦
                </div>

            </div>

            <!-- GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- ITEM -->
                <div>

                    <p class="text-sm text-gray-500">
                        Nama Barang
                    </p>

                    <h3 class="font-semibold text-[#041C64] text-lg mt-2">
                        Proyektor Epson
                    </h3>

                </div>

                <!-- ITEM -->
                <div>

                    <p class="text-sm text-gray-500">
                        Kategori
                    </p>

                    <h3 class="font-semibold text-[#041C64] text-lg mt-2">
                        Elektronik
                    </h3>

                </div>

                <!-- ITEM -->
                <div>

                    <p class="text-sm text-gray-500">
                        Jumlah Barang
                    </p>

                    <h3 class="font-semibold text-[#041C64] text-lg mt-2">
                        3 Unit
                    </h3>

                </div>

                <!-- ITEM -->
                <div>

                    <p class="text-sm text-gray-500">
                        Kondisi
                    </p>

                    <span class="inline-flex mt-2 bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">

                        Baik

                    </span>

                </div>

                <!-- ITEM -->
                <div>

                    <p class="text-sm text-gray-500">
                        Status
                    </p>

                    <span class="inline-flex mt-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-semibold">

                        Dipinjam

                    </span>

                </div>

                <!-- ITEM -->
                <div>

                    <p class="text-sm text-gray-500">
                        Tahun Pengadaan
                    </p>

                    <h3 class="font-semibold text-[#041C64] text-lg mt-2">
                        2024
                    </h3>

                </div>

            </div>

        </div>

        <!-- DESKRIPSI -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

            <h2 class="text-2xl font-bold text-[#041C64] mb-5">
                Deskripsi Inventaris
            </h2>

            <p class="text-gray-600 leading-8">

                Proyektor digunakan untuk kebutuhan seminar, pelatihan,
                dan kegiatan presentasi organisasi mahasiswa.
                Inventaris ini berada di ruang sekretariat BEM KM dan dapat
                dipinjam sesuai prosedur peminjaman inventaris.

            </p>

        </div>

    </div>

    <!-- RIGHT -->
    <div class="space-y-8">

        <!-- STATUS -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

            <h2 class="text-xl font-bold text-[#041C64] mb-6">
                Status Inventaris
            </h2>

            <div class="space-y-5">

                <!-- STATUS -->
                <div class="flex justify-between items-center">

                    <span class="text-gray-500">
                        Kondisi
                    </span>

                    <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">
                        Baik
                    </span>

                </div>

                <!-- STATUS -->
                <div class="flex justify-between items-center">

                    <span class="text-gray-500">
                        Ketersediaan
                    </span>

                    <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-semibold">
                        Dipinjam
                    </span>

                </div>

                <!-- STATUS -->
                <div class="flex justify-between items-center">

                    <span class="text-gray-500">
                        Lokasi
                    </span>

                    <span class="font-semibold text-[#041C64]">
                        Gudang BEM
                    </span>

                </div>

            </div>

        </div>

        <!-- AKSI -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

            <h2 class="text-xl font-bold text-[#041C64] mb-6">
                Aksi Cepat
            </h2>

            <div class="space-y-4">

                <button
                    class="w-full bg-[#1A46D3] hover:bg-[#1238B3] text-white py-4 rounded-2xl font-semibold transition">

                    Edit Inventaris

                </button>

                <button
                    class="w-full border border-[#1A46D3] text-[#1A46D3] py-4 rounded-2xl font-semibold hover:bg-blue-50 transition">

                    Riwayat Peminjaman

                </button>

                <button
                    class="w-full bg-red-100 hover:bg-red-200 text-red-700 py-4 rounded-2xl font-semibold transition">

                    Hapus Inventaris

                </button>

            </div>

        </div>

    </div>

</div>

@endsection