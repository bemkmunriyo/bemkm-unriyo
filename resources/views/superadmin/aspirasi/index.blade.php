@extends('superadmin.layouts.app')

@section('content')

@php
use Illuminate\Support\Str;
@endphp

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Aspirasi Mahasiswa
        </h1>

        <p class="text-gray-500 mt-2">
            Daftar aspirasi mahasiswa yang dikirim melalui halaman public website.
        </p>

    </div>

</div>



<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Aspirasi
        </p>

        <h2 class="text-4xl font-bold text-[#041C64] mt-4">
            {{ $totalAspirasi }}
        </h2>

    </div>



    <!-- DIPROSES -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Sedang Diproses
        </p>

        <h2 class="text-4xl font-bold text-yellow-500 mt-4">
            {{ $aspirasiDiproses }}
        </h2>

    </div>



    <!-- SELESAI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Selesai
        </p>

        <h2 class="text-4xl font-bold text-green-500 mt-4">
            {{ $aspirasiSelesai }}
        </h2>

    </div>

</div>



<!-- TABEL -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center">

        <div>

            <h2 class="text-2xl font-bold text-[#041C64]">
                Data Aspirasi Mahasiswa
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Menampilkan data aspirasi terbaru dari mahasiswa.
            </p>

        </div>

    </div>



    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Nama Mahasiswa
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Kategori
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Isi Aspirasi
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="px-6 py-4 text-center text-sm font-semibold text-gray-500">
                        Tanggal
                    </th>

                    <th class="px-6 py-4 text-center text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>



            <tbody>

                @forelse($aspirasis as $aspirasi)

                <tr class="border-t hover:bg-gray-50 duration-200">

                    <!-- NAMA -->
                    <td class="px-6 py-5">

                        <div class="font-semibold text-gray-700">
                            {{ $aspirasi->nama }}
                        </div>

                    </td>



                    <!-- KATEGORI -->
                    <td class="px-6 py-5">

                        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">

                            {{ $aspirasi->kategori }}

                        </span>

                    </td>



                    <!-- ISI -->
                    <td class="px-6 py-5 text-gray-600 max-w-lg">

                        {{ Str::limit($aspirasi->isi_aspirasi, 100) }}

                    </td>



                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        @if($aspirasi->status == 'Menunggu')

                            <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">
                                {{ $aspirasi->status }}
                            </span>

                        @elseif($aspirasi->status == 'Diproses')

                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">
                                {{ $aspirasi->status }}
                            </span>

                        @elseif($aspirasi->status == 'Selesai')

                            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">
                                {{ $aspirasi->status }}
                            </span>

                        @else

                            <span class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-xs font-semibold">
                                {{ $aspirasi->status }}
                            </span>

                        @endif

                    </td>



                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-center text-sm text-gray-500">

                        {{ $aspirasi->created_at->format('d M Y') }}

                    </td>



                    <!-- AKSI -->
                    <td class="px-6 py-5 text-center">

                        <a href="{{ route('superadmin.aspirasi.show', $aspirasi->id) }}"
                           class="inline-flex items-center px-4 py-2 bg-[#041C64] hover:bg-blue-900 text-white text-sm font-semibold rounded-xl duration-200 shadow-sm">

                            Detail

                        </a>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center py-10 text-gray-400">

                        Belum ada aspirasi yang dikirim mahasiswa.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>



    <!-- PAGINATION -->
    <div class="px-6 py-5 border-t border-gray-100">

        {{ $aspirasis->links() }}

    </div>

</div>

@endsection