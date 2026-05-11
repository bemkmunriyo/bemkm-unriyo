@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Data Organisasi Mahasiswa
        </h1>

        <p class="text-gray-500 mt-2">
            Kelola data ORMAWA dan UKM Universitas Respati Yogyakarta.
        </p>

    </div>

    <!-- BUTTON -->
    <div>

        <button
            class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

            + Tambah Organisasi

        </button>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Organisasi
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                24
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                🏢

            </div>

        </div>

    </div>

    <!-- UKM -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Unit Kegiatan Mahasiswa
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                12
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                🎓

            </div>

        </div>

    </div>

    <!-- HIMA -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Himpunan Mahasiswa
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                8
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                👥

            </div>

        </div>

    </div>

    <!-- BEM -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Organisasi Aktif
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-blue-500">
                20
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl">

                ✅

            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Daftar Organisasi
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Data organisasi mahasiswa dan UKM kampus
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
                        Jenis
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Ketua
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

                    <td class="px-6 py-5 text-gray-600">
                        Himpunan Mahasiswa
                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        Maxnelmir Saiselar
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Aktif

                        </span>

                    </td>

                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Detail

                            </button>

                            <button
                                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

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