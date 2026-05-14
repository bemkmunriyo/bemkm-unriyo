@extends('bemkm.layouts.app')

@section('content')

<div class="p-8">

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-4xl font-black text-[#041C64]">
                Publish Berita
            </h1>

            <p class="text-gray-500 mt-2">
                Tambahkan berita terbaru untuk dipublikasikan ke halaman portal mahasiswa.
            </p>

        </div>

    </div>

    <!-- ERROR -->
    @if ($errors->any())

    <div class="mb-6 bg-red-100 border border-red-200 text-red-700 px-6 py-5 rounded-2xl">

        <h3 class="font-bold mb-2">
            Terjadi Kesalahan:
        </h3>

        <ul class="list-disc ml-5 space-y-1">

            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif

    <!-- FORM -->
    <form action="{{ route('bemkm.berita.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">

        @csrf

        <!-- JUDUL -->
        <div class="mb-6">

            <label class="block mb-3 font-bold text-[#041C64]">
                Judul Berita
            </label>

            <input type="text"
                   name="judul"
                   value="{{ old('judul') }}"
                   placeholder="Masukkan judul berita..."
                   class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:ring-2 focus:ring-blue-200 outline-none">

        </div>

        <!-- KATEGORI -->
        <div class="mb-6">

            <label class="block mb-3 font-bold text-[#041C64]">
                Kategori
            </label>

            <input type="text"
                   name="kategori"
                   value="{{ old('kategori') }}"
                   placeholder="Contoh: Akademik, Organisasi, Seminar"
                   class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:ring-2 focus:ring-blue-200 outline-none">

        </div>

        <!-- THUMBNAIL -->
        <div class="mb-6">

            <label class="block mb-3 font-bold text-[#041C64]">
                Thumbnail Berita
            </label>

            <input type="file"
                   name="thumbnail"
                   class="w-full border border-gray-300 rounded-2xl px-5 py-4 bg-white">

            <p class="text-sm text-gray-400 mt-2">
                Format: JPG, JPEG, PNG (Max 2MB)
            </p>

        </div>

        <!-- ISI -->
        <div class="mb-8">

            <label class="block mb-3 font-bold text-[#041C64]">
                Isi Berita
            </label>

            <textarea name="isi"
                      rows="12"
                      placeholder="Tulis isi berita lengkap di sini..."
                      class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:ring-2 focus:ring-blue-200 outline-none">{{ old('isi') }}</textarea>

        </div>

        <!-- BUTTON -->
        <div class="flex justify-end gap-4">

            <!-- KEMBALI -->
            <a href="{{ route('bemkm.berita.index') }}"
               class="px-8 py-4 rounded-2xl border border-gray-300 text-gray-600 font-semibold hover:bg-gray-100 transition">

                Kembali

            </a>

            <!-- SUBMIT -->
            <button type="submit"
                    class="bg-[#041C64] hover:bg-[#02113D]
                    text-white px-8 py-4 rounded-2xl
                    font-bold shadow-lg transition">

                Publish Berita

            </button>

        </div>

    </form>

</div>

@endsection