@extends('superadmin.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Aspirasi Mahasiswa
        </h1>

        <p class="text-gray-500 mt-2">
            Daftar aspirasi, kritik, dan saran mahasiswa Universitas Respati Yogyakarta.
        </p>

    </div>

</div>

<!-- CARD -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Aspirasi
        </p>

        <h2 class="text-4xl font-bold text-[#041C64] mt-4">
            32
        </h2>

    </div>

    <!-- DIPROSES -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Sedang Diproses
        </p>

        <h2 class="text-4xl font-bold text-yellow-500 mt-4">
            10
        </h2>

    </div>

    <!-- SELESAI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Selesai
        </p>

        <h2 class="text-4xl font-bold text-green-500 mt-4">
            22
        </h2>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Daftar Aspirasi
        </h2>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Mahasiswa
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Judul Aspirasi
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Kategori
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="px-6 py-4 text-center text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50">

                    <td class="px-6 py-5">

                        Maxnelmir Saiselar

                    </td>

                    <td class="px-6 py-5">

                        Perbaikan fasilitas laboratorium

                    </td>

                    <td class="px-6 py-5">

                        Akademik

                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Diproses

                        </span>

                    </td>

                    <td class="px-6 py-5 text-center">

                        <button
                        class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold">

                            Detail

                        </button>

                    </td>

                </tr>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50">

                    <td class="px-6 py-5">

                        Mahasiswa FIKES

                    </td>

                    <td class="px-6 py-5">

                        Penambahan jadwal wifi kampus

                    </td>

                    <td class="px-6 py-5">

                        Fasilitas

                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Selesai

                        </span>

                    </td>

                    <td class="px-6 py-5 text-center">

                        <button
                        class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold">

                            Detail

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection