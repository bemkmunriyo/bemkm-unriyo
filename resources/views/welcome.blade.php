@extends('layouts.app')

@section('title', 'BEM KM UNRIYO')

@section('content')

<style>
    body{
        font-family: 'Inter', sans-serif;
    }

    html{
        scroll-behavior: smooth;
    }
</style>

<!-- ========================= HERO ========================= -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50 to-white py-16 lg:py-20 px-6">

    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-center">

        <!-- LEFT CONTENT -->
        <div>

            <!-- BADGE -->
           <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold mb-6 shadow-sm">
                
                Selamat Datang di
            </div>

            <!-- TITLE -->
            <h1 class="text-3xl lg:text-4xl font-black leading-tight text-slate-900 mb-4">

                Website Resmi
                <span class="text-amber-500">
                    BEM KM
                </span>
                Universitas Respati Yogyakarta

            </h1>

            <!-- DESCRIPTION -->
            <p class="text-sm lg:text-base leading-relaxed text-slate-600 mb-6 max-w-xl">

                Sistem informasi organisasi mahasiswa modern untuk pelayanan aspirasi,
                administrasi proposal dan LPJ, serta publikasi kegiatan kampus
                secara digital dan terintegrasi.

            </p>

            <!-- BUTTON -->
            <div class="flex flex-wrap gap-3 mb-6">

                <a href="#layanan"
                   class="bg-blue-900 hover:bg-blue-800 text-white px-5 py-3 rounded-xl text-sm font-semibold shadow-md duration-300">

                    Jelajahi Layanan

                </a>

                <a href="#tentang"
                   class="bg-white border border-slate-300 hover:border-amber-500 hover:text-amber-500 px-5 py-3 rounded-xl text-sm font-semibold duration-300">

                    Tentang Kami

                </a>

            </div>

            <!-- STATS -->
            <div class="flex flex-wrap gap-6">

                <div>
                 
                </div>

                <div>
                   

                </div>

                <div>
                    

                    
                </div>

            </div>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="relative">

            <div class="bg-white rounded-[28px] shadow-xl border border-slate-100 p-6">

                <!-- HEADER -->
                <div class="flex items-center justify-between mb-5">

                    <div>
                        <h2 class="text-xl font-black text-slate-900">
                            Sistem Organisasi
                        </h2>

                        <p class="text-slate-500 mt-1 text-xs">
                            Pelayanan mahasiswa modern
                        </p>
                    </div>

                    <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-xl">
                        🏛️
                    </div>

                </div>

                <!-- ITEMS -->
<div class="space-y-4">

    <!-- ASPIRASI -->
    <a href="/aspirasi"
       class="group flex items-start gap-4 bg-slate-50 rounded-2xl p-4 hover:bg-blue-50 hover:-translate-y-1 duration-300 border border-transparent hover:border-blue-100">

        <div class="min-w-[52px] h-[52px] rounded-2xl bg-blue-100 flex items-center justify-center text-2xl group-hover:scale-110 duration-300">
            💬
        </div>

        <div class="flex-1">

            <div class="flex items-center justify-between">

                <h3 class="font-bold text-sm text-slate-900 mb-1">
                    Aspirasi Mahasiswa
                </h3>

                <span class="text-blue-700 text-sm font-bold">
                    →
                </span>

            </div>

            <p class="text-slate-500 text-xs leading-relaxed">
                Sampaikan kritik, saran, dan aspirasi mahasiswa secara digital kepada BEM KM.
            </p>

        </div>

    </a>



    <!-- SISTEM INFORMASI ORMAWA -->
    <a href="{{ route('login') }}"
       class="group flex items-start gap-4 bg-slate-50 rounded-2xl p-4 hover:bg-amber-50 hover:-translate-y-1 duration-300 border border-transparent hover:border-amber-100">

        <div class="min-w-[52px] h-[52px] rounded-2xl bg-amber-100 flex items-center justify-center text-2xl group-hover:scale-110 duration-300">
            🏢
        </div>

        <div class="flex-1">

            <div class="flex items-center justify-between">

                <h3 class="font-bold text-sm text-slate-900 mb-1">
                    Sistem Informasi ORMAWA & UKM
                </h3>

                <span class="text-amber-700 text-sm font-bold">
                    →
                </span>

            </div>

            <p class="text-slate-500 text-xs leading-relaxed">
                Akses administrasi proposal, LPJ, inventaris, dan layanan organisasi mahasiswa.
            </p>

        </div>

    </a>



    <!-- BERITA -->
    <a href="{{ route('public.berita.index') }}"
       class="group flex items-start gap-4 bg-slate-50 rounded-2xl p-4 hover:bg-green-50 hover:-translate-y-1 duration-300 border border-transparent hover:border-green-100">

        <div class="min-w-[52px] h-[52px] rounded-2xl bg-green-100 flex items-center justify-center text-2xl group-hover:scale-110 duration-300">
            📰
        </div>

        <div class="flex-1">

            <div class="flex items-center justify-between">

                <h3 class="font-bold text-sm text-slate-900 mb-1">
                    Berita Kampus
                </h3>

                <span class="text-green-700 text-sm font-bold">
                    →
                </span>

            </div>

            <p class="text-slate-500 text-xs leading-relaxed">
                Informasi terbaru mengenai kegiatan, pengumuman, dan program kerja mahasiswa.
            </p>

        </div>

    </a>

</div>

</section>

<!-- ========================= SAMBUTAN ========================= -->
<section id="tentang" class="py-20 px-6 bg-white">

    <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">

        <!-- IMAGE -->
        <div class="flex justify-center">

            <div class="bg-slate-100 rounded-[32px] p-5 shadow-lg">

                <img 
                    src="{{ asset('storage/Presma.jpeg') }}"
                    class="w-[300px] lg:w-[360px] h-[420px] object-cover rounded-[24px]"
                    alt="Presiden Mahasiswa"
                >

            </div>

        </div>

        <!-- TEXT -->
        <div>

            <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-900 px-3 py-1.5 rounded-full text-xs font-medium mb-5">
                Sambutan Presiden Mahasiswa
            </div>

            <h2 class="text-3xl lg:text-4xl font-black leading-tight mb-5">

                Bersama Membangun
                <span class="text-amber-500">
                    Organisasi Mahasiswa
                </span>

                yang Modern dan Progresif

            </h2>

            <p class="text-sm lg:text-base text-slate-600 leading-relaxed mb-4">

                Selamat datang di website resmi Kabinet Satya Karsa BEM KM Universitas Respati Yogyakarta.
                Website ini hadir sebagai media informasi, pelayanan administrasi,
                dan wadah aspirasi mahasiswa secara digital.

            </p>

            <p class="text-sm lg:text-base text-slate-600 leading-relaxed mb-6">

                Kami berkomitmen menghadirkan organisasi mahasiswa yang transparan,
                inovatif, dan mampu menjadi jembatan antara mahasiswa dan kampus.

            </p>

            <div>
                <h3 class="text-lg font-bold">
                    Maxnelmir Pukan Saiselar
                </h3>

                <p class="text-slate-500 mt-1 text-xs">
                    Presiden Mahasiswa BEM KM UNRIYO 2026
                </p>
            </div>

        </div>

    </div>

</section>

<!-- ========================= FEATURES ========================= -->
<section id="layanan" class="py-20 px-6 bg-slate-50">

    <div class="max-w-7xl mx-auto">

        <!-- TITLE -->
        <div class="text-center mb-14">

            <h2 class="text-3xl lg:text-4xl font-black mb-4">
                Layanan Digital Mahasiswa
            </h2>

            <p class="text-sm lg:text-base text-slate-500">
                Platform modern untuk pelayanan organisasi mahasiswa.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid lg:grid-cols-3 gap-6">

            <!-- CARD -->
            <div class="bg-white rounded-[28px] p-7 border border-slate-100 hover:-translate-y-2 duration-300 shadow-md">

                <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-3xl mb-6">
                    💬
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Aspirasi Mahasiswa
                </h3>

                <p class="text-slate-600 leading-relaxed text-sm mb-6">
                    Mahasiswa dapat menyampaikan kritik, saran,
                    dan aspirasi secara digital kepada BEM KM.
                </p>

                <a href="/aspirasi"
                   class="inline-flex items-center gap-2 bg-blue-900 hover:bg-blue-800 text-white px-5 py-3 rounded-xl text-sm font-semibold duration-300">

                    Ajukan Aspirasi

                    <span>→</span>

                </a>

            </div>

            <!-- CARD -->
            <div class="bg-white rounded-[28px] p-7 border border-slate-100 hover:-translate-y-2 duration-300 shadow-md">

                <div class="w-16 h-16 rounded-2xl bg-amber-100 flex items-center justify-center text-3xl mb-6">
                    📄
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Proposal & LPJ
                </h3>

                <p class="text-slate-600 leading-relaxed text-sm mb-6">
                    Pengajuan proposal kegiatan dan LPJ organisasi
                    secara online dan terintegrasi.
                </p>

                <a href="{{ route('login') }}"
                   class="inline-flex items-center gap-2 bg-blue-900 hover:bg-blue-800 text-white px-5 py-3 rounded-xl text-sm font-semibold duration-300">

                    Ajukan Proposal

                    <span>→</span>

                </a>

            </div>

            <!-- CARD -->
            <div class="bg-white rounded-[28px] p-7 border border-slate-100 hover:-translate-y-2 duration-300 shadow-md">

                <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center text-3xl mb-6">
                    📰
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Berita Kampus
                </h3>

                <p class="text-slate-600 leading-relaxed text-sm mb-6">
                    Informasi kegiatan, program kerja,
                    dan berita terbaru organisasi mahasiswa.
                </p>

                <a href="{{ route('public.berita.index') }}"
                   class="inline-flex items-center gap-2 bg-blue-900 hover:bg-blue-800 text-white px-5 py-3 rounded-xl text-sm font-semibold duration-300">

                    Baca Berita

                    <span>→</span>

                </a>

            </div>

        </div>

    </div>

</section>

@endsection