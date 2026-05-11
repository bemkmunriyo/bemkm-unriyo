@extends('superadmin.layouts.app')

@section('content')

<!-- HEADER -->
<div class="mb-8">

    <h1 class="text-3xl font-bold text-[#041C64]">
        Inventaris BEM KM
    </h1>

    <p class="text-gray-500 mt-2">
        Monitoring peminjaman inventaris organisasi mahasiswa.
    </p>

</div>

<!-- CARD -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Inventaris
        </p>

        <h2 class="text-4xl font-bold text-[#041C64] mt-4">
            50
        </h2>

    </div>

    <!-- DIPINJAM -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Sedang Dipinjam
        </p>

        <h2 class="text-4xl font-bold text-yellow-500 mt-4">
            12
        </h2>

    </div>

    <!-- TERSEDIA -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            @if($item->status == 'tersedia')

    <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">

        Tersedia

    </span>

@else

    <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

        Dipinjam

    </span>

@endif
        </p>

        <h2 class="text-4xl font-bold text-green-500 mt-4">
            38
        </h2>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Data Peminjaman Inventaris
        </h2>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Organisasi
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Barang
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Jumlah
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
                        HIMA TI
                    </td>

                    <td class="px-6 py-5">
                        Proyektor
                    </td>

                    <td class="px-6 py-5">
                        2 Unit
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Dipinjam

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
                        UKM Musik
                    </td>

                    <td class="px-6 py-5">
                        Speaker Portable
                    </td>

                    <td class="px-6 py-5">
                        1 Unit
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Dikembalikan

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