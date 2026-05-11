@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Inventaris BEM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Kelola inventaris dan perlengkapan organisasi mahasiswa.
        </p>

    </div>

    <!-- BUTTON -->
    <div class="flex items-center gap-4">

        <a href="{{ route('bemkm.inventaris.create') }}"
           class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

            + Tambah Inventaris

        </a>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Barang
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                {{ $totalBarang }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📦

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Barang Tersedia
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                {{ $barangTersedia }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                ✅

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Sedang Dipinjam
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                {{ $sedangDipinjam }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                🔄

            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Barang Rusak
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-red-500">
                {{ $barangRusak }}
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
                Cari Inventaris
            </label>

            <input type="text"
                   placeholder="Cari nama barang..."
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
                <option>Tersedia</option>
                <option>Dipinjam</option>

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
    <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between">

        <div>

            <h2 class="text-2xl font-bold text-[#041C64]">
                Daftar Inventaris
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Data perlengkapan organisasi mahasiswa
            </p>

        </div>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Barang
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

                @forelse($inventaris as $item)

<tr class="border-t hover:bg-gray-50 transition">

    <!-- BARANG -->
    <td class="px-6 py-5">

        <div class="flex items-center gap-4">

            <!-- GAMBAR -->
            <img src="{{ asset('storage/' . $item->gambar) }}"
                 class="w-16 h-16 rounded-2xl object-cover">

            <div>

                <h3 class="font-semibold text-[#041C64] text-lg">
                    {{ $item->nama_barang }}
                </h3>

                <p class="text-sm text-gray-500 mt-1">
                    {{ $item->deskripsi }}
                </p>

            </div>

        </div>

    </td>

    <!-- KATEGORI -->
    <td class="px-6 py-5 text-gray-600">

        Inventaris BEM

    </td>

    <!-- JUMLAH -->
    <td class="px-6 py-5 font-semibold text-[#041C64]">

        {{ $item->stok }} Unit

    </td>

    <!-- KONDISI -->
    <td class="px-6 py-5">

        @if($item->kondisi == 'baik')

            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                Baik

            </span>

        @elseif($item->kondisi == 'rusak ringan')

            <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                Rusak Ringan

            </span>

        @else

            <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-xs font-semibold">

                Rusak Berat

            </span>

        @endif

    </td>

    <!-- STATUS -->
<td class="px-6 py-5">

    @if($item->status == 'tersedia')

        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">

            Tersedia

        </span>

    @else

        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

            Dipinjam

        </span>

    @endif

</td>

<!-- AKSI -->
<td class="px-6 py-5">

    <div class="flex items-center justify-center gap-2">

        <!-- EDIT -->
        <a href="{{ route('bemkm.inventaris.edit', $item->id) }}"
           class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

            Edit

        </a>

        <!-- DELETE -->
        <form action="{{ route('bemkm.inventaris.destroy', $item->id) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus inventaris ini?')">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                Hapus

            </button>

        </form>

    </div>

</td>

</tr>

@empty

<tr>

    <td colspan="6" class="text-center py-10 text-gray-500">

        Belum ada inventaris

    </td>

</tr>

@endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection