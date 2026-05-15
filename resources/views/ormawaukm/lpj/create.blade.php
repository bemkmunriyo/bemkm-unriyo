@extends('ormawaukm.layouts.app')

@section('content')

<div class="p-8">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-[#041C64]">
            Upload LPJ
        </h1>

        <p class="text-gray-500 mt-2">
            Upload laporan pertanggungjawaban kegiatan organisasi mahasiswa.
        </p>

    </div>

    <!-- FORM -->
    <form action="{{ route('ormawaukm.lpj.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">

        @csrf

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- KEGIATAN -->
            <div>

                <label class="block mb-2 font-semibold text-gray-700">
                    Kegiatan
                </label>

                <input type="text"
                       name="nama_kegiatan"
                       placeholder="Masukkan nama kegiatan"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:ring-2 focus:ring-blue-200 outline-none">

            </div>

            <!-- ORGANISASI -->
            <div>

                <label class="block mb-2 font-semibold text-gray-700">
                    Organisasi
                </label>

                <input type="text"
                       value="{{ auth()->user()->name }}"
                       readonly
                       class="w-full bg-gray-100 border border-gray-300 rounded-2xl px-5 py-4">

            </div>

            <!-- FILE -->
            <div>

                <label class="block mb-2 font-semibold text-gray-700">
                    File LPJ
                </label>

                <input type="file"
                       name="file_lpj"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4">

            </div>

        </div>

        <!-- DESKRIPSI -->
        <div class="mt-6">

            <label class="block mb-2 font-semibold text-gray-700">
                Deskripsi Kegiatan
            </label>

            <textarea name="deskripsi"
                      rows="5"
                      placeholder="Masukkan deskripsi kegiatan..."
                      class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:ring-2 focus:ring-blue-200 outline-none"></textarea>

        </div>

        <!-- BUTTON -->
        <div class="mt-8 flex justify-end">

            <button type="submit"
                    class="bg-[#041C64] hover:bg-[#02113D]
                    text-white px-8 py-4 rounded-2xl
                    font-semibold shadow-sm transition">

                Upload LPJ

            </button>

        </div>

    </form>

</div>

@endsection