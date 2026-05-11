@extends('layouts.app')

@section('content')
<!-- DASHBOARD ASPIRASI -->
<section class="min-h-screen bg-gradient-to-br from-slate-25 via-white to-blue-50 py-10">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="mb-12">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

                <div>

                  <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold mb-6 shadow-sm">
                    Aspirasi Mahasiswa
                </div>

                    <h1 class="text-4xl lg:text-5xl font-black text-slate-900 leading-tight mb-5">
                        Ruang Aspirasi
                        <span class="text-amber-500">
                            Mahasiswa
                        </span>
                    </h1>

                    <p class="text-lg text-slate-500 max-w-3xl leading-relaxed">
                        BEM KM Universitas Respati Yogyakarta menyediakan ruang aspirasi
                        digital untuk menampung kritik, saran, dan keluhan mahasiswa
                        secara aman, profesional, dan bertanggung jawab.
                    </p>

                </div>


                <!-- CARD STATUS -->
                <div class="bg-white rounded-[28px] border border-slate-100 shadow-xl p-7 min-w-[320px]">

                    <div class="flex items-center gap-5">

                        <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center text-3xl">
                            🔒
                        </div>

                        <div>

                            <h3 class="text-xl font-black text-slate-900 mb-1">
                                Privasi Terjamin
                            </h3>

                            <p class="text-slate-500 text-sm leading-relaxed">
                                Identitas pengirim dijaga dan hanya digunakan
                                apabila diperlukan dalam tindak lanjut aspirasi.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- GRID -->
        <div class="grid lg:grid-cols-3 gap-8">

            <!-- FORM -->
            <div class="lg:col-span-2">

                <div class="bg-white rounded-[32px] border border-slate-100 shadow-xl overflow-hidden">

                    <!-- TOP -->
                    <div class="bg-gradient-to-r from-blue-900 to-blue-800 px-8 py-7 text-white">

                        <h2 class="text-2xl font-black mb-2">
                            Form Pengajuan Aspirasi
                        </h2>

                        <p class="text-blue-100">
                            Sampaikan aspirasi Anda dengan aman dan nyaman.
                        </p>

                    </div>



                    <!-- FORM BODY -->
                    <div class="p-8">

                        <form class="space-y-7">

                            <!-- NAMA -->
                            <div>

                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    placeholder="Masukkan nama lengkap"
                                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-900"
                                >

                            </div>



                            <!-- NIM -->
                            <div>

                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    NIM
                                </label>

                                <input
                                    type="text"
                                    placeholder="Masukkan NIM"
                                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-900"
                                >

                            </div>



                            <!-- KATEGORI -->
                            <div>

                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    Kategori Aspirasi
                                </label>

                                <select
                                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-900"
                                >

                                    <option>
                                        Pilih kategori aspirasi
                                    </option>

                                    <option>
                                        Akademik
                                    </option>

                                    <option>
                                        Fasilitas Kampus
                                    </option>

                                    <option>
                                        Organisasi Mahasiswa
                                    </option>

                                    <option>
                                        Pelayanan Kampus
                                    </option>

                                    <option>
                                        Lainnya
                                    </option>

                                </select>

                            </div>



                            <!-- ASPIRASI -->
                            <div>

                                <label class="block text-sm font-semibold text-slate-700 mb-3">
                                    Isi Aspirasi
                                </label>

                                <textarea
                                    rows="7"
                                    placeholder="Tuliskan kritik, saran, atau aspirasi Anda..."
                                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-900 resize-none"
                                ></textarea>

                            </div>



                            <!-- PRIVASI -->
                            <div class="bg-amber-50 border border-amber-100 rounded-2xl p-5">

                                <div class="flex gap-4">

                                    <div class="text-3xl">
                                        🔐
                                    </div>

                                    <div>

                                        <h3 class="font-bold text-slate-900 mb-2">
                                            Jaminan Kerahasiaan Data
                                        </h3>

                                        <p class="text-slate-600 leading-relaxed text-sm">
                                            BEM KM Universitas Respati Yogyakarta menjamin
                                            kerahasiaan identitas pengirim aspirasi.
                                            Data hanya digunakan apabila diperlukan
                                            dalam proses tindak lanjut dan tidak akan
                                            disebarluaskan tanpa izin pengirim.
                                        </p>

                                    </div>

                                </div>

                            </div>



                            <!-- BUTTON -->
                            <div class="flex flex-wrap gap-4 pt-2">

                                <button
                                    type="submit"
                                    class="bg-blue-900 hover:bg-blue-800 text-white px-8 py-4 rounded-2xl font-semibold shadow-lg duration-300"
                                >
                                    Kirim Aspirasi
                                </button>

                                <button
                                    type="reset"
                                    class="border border-slate-300 hover:border-slate-400 px-8 py-4 rounded-2xl font-semibold duration-300"
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
                <div class="bg-white rounded-[30px] border border-slate-100 shadow-xl p-7">

                    <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-3xl mb-5">
                        📢
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4">
                        Aspirasi Mahasiswa
                    </h3>

                    <p class="text-slate-500 leading-relaxed">
                        Setiap aspirasi akan diteruskan kepada pihak terkait
                        dan menjadi bahan evaluasi untuk meningkatkan kualitas
                        pelayanan kampus dan organisasi mahasiswa.
                    </p>

                </div>



                <!-- ALUR -->
                <div class="bg-white rounded-[30px] border border-slate-100 shadow-xl p-7">

                    <h3 class="text-xl font-black text-slate-900 mb-6">
                        Alur Aspirasi
                    </h3>

                    <div class="space-y-5">

                        <div class="flex gap-4">

                            <div class="w-11 h-11 rounded-xl bg-blue-900 text-white flex items-center justify-center font-bold shrink-0">
                                1
                            </div>

                            <div>

                                <h4 class="font-bold text-slate-900 mb-1">
                                    Pengajuan
                                </h4>

                                <p class="text-sm text-slate-500">
                                    Mahasiswa mengisi form aspirasi.
                                </p>

                            </div>

                        </div>



                        <div class="flex gap-4">

                            <div class="w-11 h-11 rounded-xl bg-blue-900 text-white flex items-center justify-center font-bold shrink-0">
                                2
                            </div>

                            <div>

                                <h4 class="font-bold text-slate-900 mb-1">
                                    Verifikasi
                                </h4>

                                <p class="text-sm text-slate-500">
                                    BEM KM melakukan pengecekan dan validasi.
                                </p>

                            </div>

                        </div>



                        <div class="flex gap-4">

                            <div class="w-11 h-11 rounded-xl bg-blue-900 text-white flex items-center justify-center font-bold shrink-0">
                                3
                            </div>

                            <div>

                                <h4 class="font-bold text-slate-900 mb-1">
                                    Tindak Lanjut
                                </h4>

                                <p class="text-sm text-slate-500">
                                    Aspirasi diteruskan kepada pihak terkait.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                
@endsection