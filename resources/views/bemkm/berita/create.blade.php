@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Tulis Berita
        </h1>

        <p class="text-gray-500 mt-2">
            Buat dan publish berita organisasi mahasiswa.
        </p>

    </div>

    <!-- ACTION -->
    <div class="flex items-center gap-4">

        <a href="{{ route('bemkm.berita.index') }}"
           class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-2xl font-semibold transition">

            ← Kembali

        </a>

        <a href="{{ route('bemkm.berita.show') }}"
           class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold transition">

            Preview Berita

        </a>

    </div>

</div>

<!-- GRID -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

    <!-- FORM -->
    <div class="xl:col-span-2">

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

            <form class="space-y-8">

                <!-- JUDUL -->
                <div>

                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        Judul Berita
                    </label>

                    <input type="text"
                           placeholder="Masukkan judul berita..."
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 text-lg outline-none focus:ring-2 focus:ring-blue-200">

                </div>

                <!-- KATEGORI -->
                <div>

                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        Kategori
                    </label>

                    <select
                        class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

                        <option>Pilih Kategori</option>
                        <option>Kegiatan</option>
                        <option>Pengumuman</option>
                        <option>Prestasi</option>

                    </select>

                </div>

                <!-- FOTO -->
                <div>

                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        Thumbnail Berita
                    </label>

                    <label for="thumbnail"
       class="border-2 border-dashed border-gray-300 rounded-3xl p-10 text-center hover:border-[#1A46D3] transition cursor-pointer block">

    <div class="text-6xl mb-4">
        🖼️
    </div>

    <h3 class="font-semibold text-[#041C64] text-xl">
        Upload Foto Berita
    </h3>

    <p class="text-sm text-gray-500 mt-3">
        Klik untuk memilih gambar
    </p>

    <p class="text-xs text-gray-400 mt-2">
        PNG, JPG, JPEG maksimal 5MB
    </p>

</label>

<input
    type="file"
    id="thumbnail"
    name="thumbnail"
    accept="image/*"
    class="hidden">

                    </div>

                </div>

                <!-- CONTENT -->
                <div>

                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        Isi Berita
                    </label>

                    <textarea rows="14"
                              placeholder="Tulis isi berita..."
                              class="w-full border border-gray-300 rounded-3xl px-5 py-5 outline-none focus:ring-2 focus:ring-blue-200 leading-8"></textarea>

                </div>

                <!-- BUTTON -->
                <div class="flex justify-end gap-4">

                    <button type="button"
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-2xl font-semibold transition">

                        Simpan Draft

                    </button>

                    <button type="submit"
                            class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-8 py-3 rounded-2xl font-semibold transition">

                        Publish Berita

                    </button>

                </div>

            </form>

        </div>

    </div>

    <!-- PREVIEW -->
    <div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden sticky top-24">

            <!-- IMAGE -->
            <div class="h-56 bg-gradient-to-r from-[#041C64] to-[#1A46D3] flex items-center justify-center text-white text-6xl">

                📰

            </div>

            <!-- CONTENT -->
            <div class="p-6">

                <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">

                    Preview

                </span>

                <h2 class="text-2xl font-bold text-[#041C64] leading-tight mt-5">

                    Judul berita akan tampil di sini

                </h2>

                <p class="text-gray-500 text-sm mt-4 leading-7">

                    Preview singkat berita akan tampil otomatis di bagian ini.

                </p>

                <!-- AUTHOR -->
                <div class="flex items-center gap-4 mt-8 pt-6 border-t">

                    <div class="w-12 h-12 rounded-full bg-[#1A46D3] text-white flex items-center justify-center font-bold">

                        A

                    </div>

                    <div>

                        <h4 class="font-semibold text-[#041C64]">
                            {{ optional(auth()->user())->name ?? 'Administrator' }}
                        </h4>

                        <p class="text-sm text-gray-500">
                            Penulis
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection