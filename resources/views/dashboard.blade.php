@extends('layouts.app')

@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="min-h-screen bg-slate-50 p-6">

    <!-- HEADER -->
    <div class="mb-8">

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

            <div>

                <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Dashboard Super Admin
                </div>

                <h1 class="text-4xl font-black text-slate-900 mb-3">
                    Dashboard Aspirasi Mahasiswa
                </h1>

                <p class="text-slate-500 text-lg">
                    Monitoring dan pengelolaan aspirasi mahasiswa secara realtime.
                </p>

            </div>

        </div>

    </div>



    <!-- STATISTIK -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

        <!-- TOTAL -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-6">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-slate-500 text-sm mb-2">
                        Total Aspirasi
                    </p>

                    <h2 class="text-4xl font-black text-slate-900">
                        {{ $totalAspirasi }}
                    </h2>

                </div>

                <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-3xl">
                    📢
                </div>

            </div>

        </div>



        <!-- MENUNGGU -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-6">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-slate-500 text-sm mb-2">
                        Menunggu
                    </p>

                    <h2 class="text-4xl font-black text-amber-500">
                        {{ $aspirasiMenunggu }}
                    </h2>

                </div>

                <div class="w-16 h-16 rounded-2xl bg-amber-100 flex items-center justify-center text-3xl">
                    ⏳
                </div>

            </div>

        </div>



        <!-- DIPROSES -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-6">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-slate-500 text-sm mb-2">
                        Diproses
                    </p>

                    <h2 class="text-4xl font-black text-blue-600">
                        {{ $aspirasiDiproses }}
                    </h2>

                </div>

                <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-3xl">
                    🔄
                </div>

            </div>

        </div>



        <!-- SELESAI -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-6">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-slate-500 text-sm mb-2">
                        Selesai
                    </p>

                    <h2 class="text-4xl font-black text-green-600">
                        {{ $aspirasiSelesai }}
                    </h2>

                </div>

                <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center text-3xl">
                    ✅
                </div>

            </div>

        </div>

    </div>



    <!-- KATEGORI -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-6 mb-8">

        <div class="bg-white rounded-3xl shadow-lg p-5 border border-slate-100">
            <p class="text-slate-500 text-sm mb-2">Akademik</p>
            <h3 class="text-3xl font-black text-slate-900">
                {{ $kategoriAkademik }}
            </h3>
        </div>

        <div class="bg-white rounded-3xl shadow-lg p-5 border border-slate-100">
            <p class="text-slate-500 text-sm mb-2">Fasilitas</p>
            <h3 class="text-3xl font-black text-slate-900">
                {{ $kategoriFasilitas }}
            </h3>
        </div>

        <div class="bg-white rounded-3xl shadow-lg p-5 border border-slate-100">
            <p class="text-slate-500 text-sm mb-2">Organisasi</p>
            <h3 class="text-3xl font-black text-slate-900">
                {{ $kategoriOrganisasi }}
            </h3>
        </div>

        <div class="bg-white rounded-3xl shadow-lg p-5 border border-slate-100">
            <p class="text-slate-500 text-sm mb-2">Pelayanan</p>
            <h3 class="text-3xl font-black text-slate-900">
                {{ $kategoriPelayanan }}
            </h3>
        </div>

        <div class="bg-white rounded-3xl shadow-lg p-5 border border-slate-100">
            <p class="text-slate-500 text-sm mb-2">Lainnya</p>
            <h3 class="text-3xl font-black text-slate-900">
                {{ $kategoriLainnya }}
            </h3>
        </div>

    </div>



    <!-- TABEL ASPIRASI -->
    <div class="bg-white rounded-[32px] shadow-xl border border-slate-100 overflow-hidden">

        <!-- HEADER -->
        <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between">

            <div>

                <h2 class="text-2xl font-black text-slate-900 mb-1">
                    Data Aspirasi Mahasiswa
                </h2>

                <p class="text-slate-500 text-sm">
                    Daftar aspirasi terbaru mahasiswa Universitas Respati Yogyakarta.
                </p>

            </div>

        </div>



        <!-- TABLE -->
        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-slate-50">

                    <tr>

                        <th class="px-6 py-4 text-left text-sm font-bold text-slate-700">
                            Nama
                        </th>

                        <th class="px-6 py-4 text-left text-sm font-bold text-slate-700">
                            NIM
                        </th>

                        <th class="px-6 py-4 text-left text-sm font-bold text-slate-700">
                            Kategori
                        </th>

                        <th class="px-6 py-4 text-left text-sm font-bold text-slate-700">
                            Isi Aspirasi
                        </th>

                        <th class="px-6 py-4 text-left text-sm font-bold text-slate-700">
                            Status
                        </th>

                        <th class="px-6 py-4 text-center text-sm font-bold text-slate-700">
                            Aksi
                        </th>

                    </tr>

                </thead>



                <tbody>

                    @forelse($aspirasis as $aspirasi)

                    <tr class="border-t border-slate-100 hover:bg-slate-50 duration-200">

                        <!-- NAMA -->
                        <td class="px-6 py-5 font-semibold text-slate-800">
                            {{ $aspirasi->nama }}
                        </td>



                        <!-- NIM -->
                        <td class="px-6 py-5 text-slate-600">
                            {{ $aspirasi->nim }}
                        </td>



                        <!-- KATEGORI -->
                        <td class="px-6 py-5">

                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $aspirasi->kategori }}
                            </span>

                        </td>



                        <!-- ASPIRASI -->
                        <td class="px-6 py-5 text-slate-600 max-w-md">

                            {{ Str::limit($aspirasi->isi_aspirasi, 80) }}

                        </td>



                        <!-- STATUS -->
                        <td class="px-6 py-5">

                            @if($aspirasi->status == 'Menunggu')

                                <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $aspirasi->status }}
                                </span>

                            @elseif($aspirasi->status == 'Diproses')

                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $aspirasi->status }}
                                </span>

                            @else

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $aspirasi->status }}
                                </span>

                            @endif

                        </td>



                        <!-- AKSI -->
                        <td class="px-6 py-5">

                            <div class="flex items-center justify-center gap-3">

                                <a
                                    href="#"
                                    class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-xl text-sm font-semibold duration-300"
                                >
                                    Detail
                                </a>

                                <a
                                    href="#"
                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl text-sm font-semibold duration-300"
                                >
                                    Hapus
                                </a>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6" class="text-center py-12 text-slate-400">

                            Belum ada data aspirasi mahasiswa.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>



        <!-- PAGINATION -->
        <div class="p-6 border-t border-slate-100">

            {{ $aspirasis->links() }}

        </div>

    </div>

</div>

@endsection