@extends('bemkm.layouts.app')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-[#041C64]">
            Tambah Inventaris BEM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Tambahkan data inventaris untuk dipinjam ORMAWA dan UKM.
        </p>

    </div>

    <!-- FORM -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

        <form action="{{ route('bemkm.inventaris.store') }}"
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
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 focus:ring-2 focus:ring-blue-200 outline-none">

                </div>

                <!-- STOK -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Jumlah Stok
                    </label>

                    <input type="number"
                           name="stok"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 focus:ring-2 focus:ring-blue-200 outline-none">

                </div>

                <!-- BIAYA -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Biaya Pemeliharaan
                    </label>

                    <input type="number"
                           name="biaya_pemeliharaan"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 focus:ring-2 focus:ring-blue-200 outline-none">

                </div>

                <!-- KONDISI -->
                <div>

                    <label class="font-semibold text-gray-700">
                        Kondisi Barang
                    </label>

                    <select name="kondisi"
                            class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 focus:ring-2 focus:ring-blue-200 outline-none">

                        <option value="baik">Baik</option>

                        <option value="rusak ringan">
                            Rusak Ringan
                        </option>

                        <option value="rusak berat">
                            Rusak Berat
                        </option>

                    </select>

                </div>

            </div>
            <!-- STATUS -->
<div>

    <label class="font-semibold text-gray-700">
        Status Barang
    </label>

    <select name="status"
            class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2">

        <option value="tersedia">
            Tersedia
        </option>

        <option value="dipinjam">
            Dipinjam
        </option>

    </select>

</div>

            <!-- DESKRIPSI -->
            <div class="mt-6">

                <label class="font-semibold text-gray-700">
                    Deskripsi Barang
                </label>

                <textarea name="deskripsi"
                          rows="5"
                          class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 focus:ring-2 focus:ring-blue-200 outline-none"></textarea>

            </div>

            <!-- UPLOAD GAMBAR -->
            <div class="mt-6">

                <label class="font-semibold text-gray-700">
                    Upload Gambar Barang
                </label>

                <input type="file"
                       name="gambar"
                       accept="image/*"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4 mt-2 bg-white focus:ring-2 focus:ring-blue-200 outline-none">

                <p class="text-sm text-gray-400 mt-2">
                    Format: JPG, JPEG, PNG (Max 2MB)
                </p>

            </div>

            <!-- BUTTON -->
            <div class="mt-8">

                <button type="submit"
                        class="bg-[#041C64] hover:bg-[#02113D] text-white px-8 py-4 rounded-2xl font-semibold transition">

                    Simpan Inventaris

                </button>

            </div>

        </form>

    </div>

</div>

@endsection