@extends('bemkm.layouts.app')

@section('content')

<div class="max-w-4xl mx-auto">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-[#041C64]">
            Edit Berita
        </h1>

        <p class="text-gray-500 mt-2">
            Perbarui informasi berita mahasiswa.
        </p>

    </div>

    <!-- FORM -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

        <form action="{{ route('bemkm.berita.update', $berita->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-6">

            @csrf
            @method('PUT')

            <!-- JUDUL -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    Judul Berita
                </label>

                <input type="text"
                       name="judul"
                       value="{{ old('judul', $berita->judul) }}"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

            </div>

            <!-- KATEGORI -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    Kategori
                </label>

                <input type="text"
                       name="kategori"
                       value="{{ old('kategori', $berita->kategori) }}"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

            </div>

            <!-- THUMBNAIL -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    Thumbnail Baru
                </label>

                <input type="file"
                       name="thumbnail"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4">

                @if($berita->thumbnail)

                <img src="{{ asset('uploads/berita/' . $berita->thumbnail) }}"
                     class="w-40 rounded-2xl mt-4">

                @endif

            </div>

            <!-- ISI -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    Isi Berita
                </label>

                <textarea name="isi"
                          rows="8"
                          class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">{{ old('isi', $berita->isi) }}</textarea>

            </div>

            <!-- BUTTON -->
            <div class="flex justify-end gap-4">

                <a href="{{ route('bemkm.berita.index') }}"
                   class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-2xl font-semibold transition">

                    Kembali

                </a>

                <button type="submit"
                        class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-8 py-3 rounded-2xl font-semibold transition">

                    Update Berita

                </button>

            </div>

        </form>

    </div>

</div>

@endsection