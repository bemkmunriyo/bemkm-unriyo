@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Manajemen Berita
        </h1>

        <p class="text-gray-500 mt-2">
            Buat, edit, dan publish berita organisasi mahasiswa.
        </p>

    </div>

    <!-- BUTTON -->
    <div class="flex items-center gap-4">

        <a href="{{ route('bemkm.berita.create') }}"
   class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

    + Tambah Berita

</a>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Berita
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                20
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">
                📰
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Publish
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                15
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                ✅
            </div>

        </div>

    </div>

    <!-- CARD -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Draft
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                5
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">
                ✏️
            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center">

        <div>

            <h2 class="text-2xl font-bold text-[#041C64]">
                Daftar Berita
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Kelola berita yang tampil di halaman publik
            </p>

        </div>

        <!-- SEARCH -->
        <div class="hidden md:block">

            <input type="text"
                   placeholder="Cari berita..."
                   class="border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-blue-200">

        </div>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Berita
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Penulis
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Tanggal
                    </th>

                    <th class="text-center px-6 py-4 text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                <!-- ROW -->
                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- BERITA -->
                    <td class="px-6 py-5">

                        <div class="flex items-center gap-4">

                            <!-- IMAGE -->
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-[#041C64] to-[#1A46D3] flex items-center justify-center text-white text-3xl shadow-sm">

                                📰

                            </div>

                            <!-- TITLE -->
                            <div>

                                <h3 class="font-semibold text-[#041C64] text-lg">
                                    Seminar Nasional Teknologi AI
                                </h3>

                                <p class="text-sm text-gray-500 mt-1">
                                    Seminar nasional mahasiswa teknologi informasi.
                                </p>

                            </div>

                        </div>

                    </td>

                    <!-- PENULIS -->
                    <td class="px-6 py-5 text-gray-600">

                        {{ optional(auth()->user())->name ?? 'Administrator' }}

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Publish

                        </span>

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">
                        10 Mei 2026
                    </td>

                    <!-- ACTION -->
                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            <!-- DETAIL -->
                            <button
                                class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Detail

                            </button>

                            <!-- EDIT -->
                            <button
                                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Edit

                            </button>

                            <!-- DELETE -->
                            <button
                                class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                Hapus

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

<!-- MODAL -->
<div id="modalBerita"
     class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-5">

    <div class="bg-white rounded-3xl w-full max-w-3xl shadow-2xl overflow-hidden">

        <!-- HEADER -->
        <div class="px-8 py-6 border-b border-gray-100 flex items-center justify-between">

            <div>

                <h2 class="text-2xl font-bold text-[#041C64]">
                    Tambah Berita
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Upload berita terbaru organisasi mahasiswa
                </p>

            </div>

            <!-- CLOSE -->
            <button onclick="closeModal()"
                    class="text-3xl text-gray-400 hover:text-red-500 transition">

                ×

            </button>

        </div>

        <!-- FORM -->
        <form class="p-8 space-y-6">

            <!-- JUDUL -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    Judul Berita
                </label>

                <input type="text"
                       placeholder="Masukkan judul berita..."
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

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
                    Upload Foto Berita
                </label>

                <div
                    class="border-2 border-dashed border-gray-300 rounded-3xl p-10 text-center hover:border-[#1A46D3] transition cursor-pointer">

                    <div class="text-5xl mb-4">
                        📷
                    </div>

                    <h3 class="font-semibold text-[#041C64] text-lg">
                        Upload Foto
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        PNG, JPG, JPEG maksimal 5MB
                    </p>

                    <input type="file" class="hidden">

                </div>

            </div>

            <!-- ISI -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    Isi Berita
                </label>

                <textarea rows="6"
                          placeholder="Tulis isi berita..."
                          class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200"></textarea>

            </div>

            <!-- STATUS -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    Status Publish
                </label>

                <select
                    class="w-full border border-gray-300 rounded-2xl px-5 py-4 outline-none focus:ring-2 focus:ring-blue-200">

                    <option>Publish</option>
                    <option>Draft</option>

                </select>

            </div>

            <!-- BUTTON -->
            <div class="flex items-center justify-end gap-4 pt-4">

                <button type="button"
                        onclick="closeModal()"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-2xl font-semibold transition">

                    Batal

                </button>

                <button type="submit"
                        class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-8 py-3 rounded-2xl font-semibold transition">

                    Publish Berita

                </button>

            </div>

        </form>

    </div>

</div>

<!-- SCRIPT -->
<script>

function openModal() {

    document.getElementById('modalBerita').classList.remove('hidden');

}

function closeModal() {

    document.getElementById('modalBerita').classList.add('hidden');

}

</script>

@endsection