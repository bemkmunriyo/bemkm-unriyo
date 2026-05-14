@extends('layouts.app')

@section('content')

<section class="pt-8 pb-24 bg-gradient-to-b from-blue-50 to-white overflow-hidden min-h-screen">

    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <!-- HEADER -->
        <div class="mb-16">

            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- TEXT -->
                <div>

                    <!-- BADGE -->
                    <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold mb-6 shadow-sm">

                        Aspirasi Mahasiswa

                    </div>

                    <!-- TITLE -->
                    <h1 class="text-4xl lg:text-5xl font-black leading-tight text-slate-900">

                        Ruang Aspirasi

                        <span class="text-amber-500">

                            Mahasiswa

                        </span>

                    </h1>

                    <!-- DESC -->
                    <p class="text-lg text-slate-600 leading-relaxed mt-8 max-w-2xl">

                        BEM KM Universitas Respati Yogyakarta menyediakan ruang
                        aspirasi digital untuk menampung kritik, saran, dan
                        keluhan mahasiswa secara aman, profesional,
                        dan bertanggung jawab.

                    </p>

                    <!-- BUTTON -->
                    <div class="flex flex-wrap gap-4 mt-10">

                        <a href="#form-aspirasi"
                           class="inline-flex items-center gap-3
                                  bg-blue-900
                                  hover:bg-blue-800
                                  text-white
                                  px-7 py-4
                                  rounded-2xl
                                  font-semibold
                                  shadow-md
                                  duration-300">

                            Kirim Aspirasi

                            <span>→</span>

                        </a>

                        <a href="#alur"
                           class="inline-flex items-center gap-3
                                  border border-slate-300
                                  hover:border-amber-500
                                  hover:text-amber-500
                                  px-7 py-4
                                  rounded-2xl
                                  font-semibold
                                  duration-300">

                            Lihat Alur

                        </a>

                    </div>

                </div>

                <!-- CARD -->
                <div class="relative flex justify-center">

                    <!-- BG -->
                    <div class="absolute w-[300px] h-[300px] bg-blue-100 rounded-full blur-3xl opacity-50"></div>

                    <!-- CARD -->
                    <div class="relative bg-white rounded-[28px]
                                border border-slate-100
                                shadow-xl p-8 w-full max-w-md">

                        <div class="flex items-start gap-5">

                            <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center text-3xl shrink-0">

                                🔒

                            </div>

                            <div>

                                <h3 class="text-2xl font-black text-slate-900 mb-3">

                                    Privasi Terjamin

                                </h3>

                                <p class="text-slate-500 leading-relaxed">

                                    Identitas pengirim dijaga dan hanya digunakan
                                    apabila diperlukan dalam proses tindak lanjut aspirasi.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- GRID -->
        <div class="grid lg:grid-cols-3 gap-8">

            <!-- FORM -->
            <div class="lg:col-span-2">

                <div id="form-aspirasi"
                     class="bg-white rounded-[28px] border border-slate-100 shadow-xl overflow-hidden">

                    <!-- HEADER FORM -->
                    <div class="bg-gradient-to-r from-blue-900 to-blue-800 px-10 lg:px-12 py-10 text-white">

                        <h2 class="text-3xl lg:text-4xl font-black mb-3 leading-tight">

                            Form Pengajuan Aspirasi

                        </h2>

                        <p class="text-blue-100 text-base leading-relaxed max-w-2xl">

                            Sampaikan kritik, saran, dan aspirasi Anda dengan nyaman.

                        </p>

                    </div>

                    <!-- BODY -->
                    <div class="p-8 lg:p-10">

                        <!-- ALERT -->
                        @if(session('success'))

                            <div class="mb-7 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl">

                                {{ session('success') }}

                            </div>

                        @endif

                        <!-- ERROR -->
                        @if($errors->any())

                            <div class="mb-7 bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-2xl">

                                <ul class="space-y-1">

                                    @foreach($errors->all() as $error)

                                        <li>
                                            • {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        <!-- FORM -->
                        <form action="{{ route('aspirasi.store') }}"
                              method="POST"
                              class="space-y-7">

                            @csrf

                            <!-- GRID -->
                            <div class="grid md:grid-cols-2 gap-6">

                                <!-- NAMA -->
                                <div>

                                    <label class="block text-sm font-bold text-slate-700 mb-3">

                                        Nama Lengkap

                                    </label>

                                    <input
                                        type="text"
                                        name="nama"
                                        placeholder="Masukkan nama lengkap"
                                        class="w-full border border-slate-200 rounded-2xl px-5 py-4 bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-900 transition duration-300"
                                        required
                                    >

                                </div>

                                <!-- NIM -->
                                <div>

                                    <label class="block text-sm font-bold text-slate-700 mb-3">

                                        NIM

                                    </label>

                                    <input
                                        type="text"
                                        name="nim"
                                        placeholder="Masukkan NIM"
                                        class="w-full border border-slate-200 rounded-2xl px-5 py-4 bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-900 transition duration-300"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- KATEGORI -->
                            <div>

                                <label class="block text-sm font-bold text-slate-700 mb-3">

                                    Kategori Aspirasi

                                </label>

                                <select
                                    name="kategori"
                                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-900 transition duration-300"
                                    required
                                >

                                    <option value="">
                                        Pilih kategori aspirasi
                                    </option>

                                    <option value="Akademik">
                                        Akademik
                                    </option>

                                    <option value="Fasilitas Kampus">
                                        Fasilitas Kampus
                                    </option>

                                    <option value="Organisasi Mahasiswa">
                                        Organisasi Mahasiswa
                                    </option>

                                    <option value="Pelayanan Kampus">
                                        Pelayanan Kampus
                                    </option>

                                    <option value="Lainnya">
                                        Lainnya
                                    </option>

                                </select>

                            </div>

                            <!-- ISI -->
                            <div>

                                <label class="block text-sm font-bold text-slate-700 mb-3">

                                    Isi Aspirasi

                                </label>

                                <textarea
                                    name="isi_aspirasi"
                                    rows="8"
                                    placeholder="Tuliskan kritik, saran, atau aspirasi Anda secara jelas dan sopan..."
                                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-900 resize-none transition duration-300"
                                    required
                                ></textarea>

                            </div>

                            <!-- PRIVASI -->
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-100 rounded-3xl p-6">

                                <div class="flex gap-5">

                                    <div class="w-14 h-14 rounded-2xl bg-amber-100 flex items-center justify-center text-2xl shrink-0">

                                        🔐

                                    </div>

                                    <div>

                                        <h3 class="font-black text-slate-900 mb-2">

                                            Jaminan Kerahasiaan Data

                                        </h3>

                                        <p class="text-slate-600 leading-relaxed text-sm">

                                            Seluruh aspirasi mahasiswa akan diproses
                                            secara profesional dan rahasia.
                                            Data pengirim tidak akan dipublikasikan
                                            tanpa izin.

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <!-- BUTTON -->
                            <div class="flex flex-wrap gap-4 pt-2">

                                <button
                                    type="submit"
                                    class="bg-blue-900 hover:bg-blue-800 text-white px-8 py-4 rounded-2xl font-bold shadow-md hover:shadow-xl transition duration-300"
                                >

                                    Kirim Aspirasi

                                </button>

                                <button
                                    type="reset"
                                    class="border border-slate-300 hover:border-amber-500 hover:text-amber-500 px-8 py-4 rounded-2xl font-bold transition duration-300"
                                >

                                    Reset Form

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- SIDE -->
            <div class="space-y-7">

                <!-- INFO -->
                <div class="bg-white rounded-[28px] border border-slate-100 shadow-xl p-8">

                    <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-3xl mb-5">

                        📢

                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4">

                        Aspirasi Mahasiswa

                    </h3>

                    <p class="text-slate-500 leading-relaxed">

                        Setiap aspirasi akan diteruskan kepada pihak terkait
                        dan menjadi bahan evaluasi dalam meningkatkan kualitas
                        pelayanan kampus serta organisasi mahasiswa.

                    </p>

                </div>

                <!-- ALUR -->
                <div id="alur"
                     class="bg-white rounded-[28px] border border-slate-100 shadow-xl p-8">

                    <h3 class="text-2xl font-black text-slate-900 mb-7">

                        Alur Aspirasi

                    </h3>

                    <div class="space-y-6">

                        <!-- ITEM -->
                        <div class="flex gap-4">

                            <div class="w-12 h-12 rounded-xl bg-blue-900 text-white flex items-center justify-center font-black shrink-0">

                                1

                            </div>

                            <div>

                                <h4 class="font-black text-slate-900 mb-1">

                                    Pengajuan Aspirasi

                                </h4>

                                <p class="text-sm text-slate-500">

                                    Mahasiswa mengisi dan mengirim formulir aspirasi.

                                </p>

                            </div>

                        </div>

                        <!-- ITEM -->
                        <div class="flex gap-4">

                            <div class="w-12 h-12 rounded-xl bg-blue-900 text-white flex items-center justify-center font-black shrink-0">

                                2

                            </div>

                            <div>

                                <h4 class="font-black text-slate-900 mb-1">

                                    Verifikasi Data

                                </h4>

                                <p class="text-sm text-slate-500">

                                    Aspirasi diperiksa dan diverifikasi oleh BEM KM.

                                </p>

                            </div>

                        </div>

                        <!-- ITEM -->
                        <div class="flex gap-4">

                            <div class="w-12 h-12 rounded-xl bg-blue-900 text-white flex items-center justify-center font-black shrink-0">

                                3

                            </div>

                            <div>

                                <h4 class="font-black text-slate-900 mb-1">

                                    Tindak Lanjut

                                </h4>

                                <p class="text-sm text-slate-500">

                                    Aspirasi diteruskan kepada pihak terkait
                                    untuk ditindaklanjuti.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection