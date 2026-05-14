@extends('bemkm.layouts.app')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-3xl font-bold text-[#041C64]">
                Edit Inventaris
            </h1>

            <p class="text-gray-500 mt-2">
                Perbarui data inventaris BEM KM.
            </p>

        </div>

        <a href="{{ route('bemkm.inventaris.index') }}"
           class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-3 rounded-2xl font-semibold transition">

            ← Kembali

        </a>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

        <form action="{{ route('bemkm.inventaris.update', $inventaris->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- NAMA BARANG -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Nama Barang
                    </label>

                    <input type="text"
                           name="nama_barang"
                           value="{{ old('nama_barang', $inventaris->nama_barang) }}"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 outline-none focus:ring-2 focus:ring-blue-200">

                </div>

                <!-- STOK -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Jumlah Stok
                    </label>

                    <input type="number"
                           name="stok"
                           value="{{ old('stok', $inventaris->stok) }}"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 outline-none focus:ring-2 focus:ring-blue-200">

                </div>

                <!-- BIAYA -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Biaya Pemeliharaan
                    </label>

                    <input type="number"
                           name="biaya_pemeliharaan"
                           value="{{ old('biaya_pemeliharaan', $inventaris->biaya_pemeliharaan) }}"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 outline-none focus:ring-2 focus:ring-blue-200">

                </div>

                <!-- KONDISI -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Kondisi Barang
                    </label>

                    <select name="kondisi"
                            class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 outline-none focus:ring-2 focus:ring-blue-200">

                        <option value="baik"
                            {{ $inventaris->kondisi == 'baik' ? 'selected' : '' }}>

                            Baik

                        </option>

                        <option value="rusak ringan"
                            {{ $inventaris->kondisi == 'rusak ringan' ? 'selected' : '' }}>

                            Rusak Ringan

                        </option>

                        <option value="rusak berat"
                            {{ $inventaris->kondisi == 'rusak berat' ? 'selected' : '' }}>

                            Rusak Berat

                        </option>

                    </select>

                </div>

                <!-- STATUS -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Status Barang
                    </label>

                    <select name="status"
                            class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 outline-none focus:ring-2 focus:ring-blue-200">

                        <option value="tersedia"
                            {{ $inventaris->status == 'tersedia' ? 'selected' : '' }}>

                            Tersedia

                        </option>

                        <option value="dipinjam"
                            {{ $inventaris->status == 'dipinjam' ? 'selected' : '' }}>

                            Dipinjam

                        </option>

                    </select>

                </div>

            </div>

            <!-- DESKRIPSI -->
            <div class="mt-6">

                <label class="font-semibold text-gray-700">
                    Deskripsi Barang
                </label>

                <textarea name="deskripsi"
                          rows="5"
                          class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 outline-none focus:ring-2 focus:ring-blue-200">{{ old('deskripsi', $inventaris->deskripsi) }}</textarea>

            </div>

            <!-- GAMBAR -->
            <div class="mt-6">

                <label class="font-semibold text-gray-700">
                    Gambar Barang
                </label>

                <input type="file"
                       name="gambar"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2">

            </div>

            <!-- PREVIEW -->
            @if($inventaris->gambar)

            <div class="mt-6">

                <p class="font-semibold text-gray-700 mb-3">
                    Gambar Saat Ini
                </p>

                <img src="{{ asset('storage/' . $inventaris->gambar) }}"
                     class="w-52 h-52 rounded-3xl object-cover border border-gray-200">

            </div>

            @endif

            <!-- BUTTON -->
            <div class="flex items-center gap-4 mt-10">

                <button type="submit"
                        class="bg-[#041C64] hover:bg-[#02113D] text-white px-8 py-4 rounded-2xl font-semibold transition">

                    Update Inventaris

                </button>

                <a href="{{ route('bemkm.inventaris.index') }}"
                   class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-4 rounded-2xl font-semibold transition">

                    Batal

                </a>

            </div>

        </form>

    </div>

</div>

@endsection