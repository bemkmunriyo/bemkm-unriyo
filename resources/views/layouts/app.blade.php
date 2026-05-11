<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
          rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-white text-slate-800">

    <div class="min-h-screen flex flex-col">

        <!-- NAVBAR -->
        @include('layouts.navigation')

        <!-- HEADER -->
        @hasSection('header')

            <header class="bg-white border-b border-slate-200">

                <div class="max-w-7xl mx-auto py-6 px-6 lg:px-8">

                    @yield('header')

                </div>

            </header>

        @endif

        <!-- CONTENT -->
        <main class="flex-1">

            @yield('content')

        </main>

        <!-- FOOTER -->
        <footer class="bg-blue-950 text-white mt-20">

            <!-- TOP -->
<div class="max-w-7xl mx-auto px-6 lg:px-8 py-14">

    <div class="grid lg:grid-cols-3 gap-12 items-start">

        <!-- BRAND -->
        <div>

            <div class="flex items-center gap-4 mb-5">

                <div class="w-14 h-14 rounded-2xl bg-amber-400 flex items-center justify-center text-2xl shadow-lg">

                    🎓

                </div>

                <div>

                    <h2 class="text-2xl font-black">
                        BEM KM
                    </h2>

                    <p class="text-blue-200 text-sm">
                        Universitas Respati Yogyakarta
                    </p>

                </div>

            </div>

            <p class="text-blue-100 leading-relaxed text-sm max-w-md">

                Website resmi Badan Eksekutif Mahasiswa Keluarga Mahasiswa Universitas Respati Yogyakarta sebagai media informasi, aspirasi, dan pelayanan mahasiswa.

            </p>

        </div>

        <!-- NAVIGASI -->
        <div class="lg:mx-auto">

            <h3 class="text-xl font-bold mb-5 text-amber-400">
                Navigasi
            </h3>

            <div class="space-y-3">

                <a href="/"
                   class="block text-blue-100 hover:text-white duration-300">

                    Beranda

                </a>

                <a href="/tentang"
                   class="block text-blue-100 hover:text-white duration-300">

                    Tentang Kami

                </a>

                <a href="/berita"
                   class="block text-blue-100 hover:text-white duration-300">

                    Berita

                </a>

                <a href="/aspirasi"
                   class="block text-blue-100 hover:text-white duration-300">

                    Aspirasi Mahasiswa

                </a>

            </div>

        </div>

        <!-- KONTAK & SOSIAL -->
        <div class="lg:ml-auto">

            <h3 class="text-xl font-bold mb-5 text-amber-400">
                Kontak
            </h3>

            <div class="space-y-4 text-blue-100 text-sm mb-8">

                <p>
                    📍 Universitas Respati Yogyakarta
                </p>

                <p>
                    📧 bemkm@unriyo.ac.id
                </p>

                <p>
                    📞 +62 812-3456-7890
                </p>

            </div>

            <!-- SOSIAL -->
            <div>

                <h3 class="text-lg font-bold mb-4 text-amber-400">
                    Media Sosial
                </h3>

                <div class="flex gap-4">

                    <a href="#"
                       class="w-12 h-12 rounded-2xl bg-white/10 hover:bg-amber-400 hover:text-blue-950 duration-300 flex items-center justify-center text-xl">

                        📸

                    </a>

                    <a href="#"
                       class="w-12 h-12 rounded-2xl bg-white/10 hover:bg-amber-400 hover:text-blue-950 duration-300 flex items-center justify-center text-xl">

                        ▶️

                    </a>

                    <a href="#"
                       class="w-12 h-12 rounded-2xl bg-white/10 hover:bg-amber-400 hover:text-blue-950 duration-300 flex items-center justify-center text-xl">

                        📘

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- COPYRIGHT -->
<div class="border-t border-white/10">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-5">

        <div class="flex flex-col md:flex-row items-center justify-between gap-3">

            <!-- LEFT -->
            <p class="text-blue-200 text-sm text-center md:text-left">

                © {{ date('Y') }}
                BEM KM Universitas Respati Yogyakarta.
                All rights reserved.

            </p>

            <!-- RIGHT -->
            <p class="text-blue-300 text-sm text-center md:text-right">

             
                <span class="text-amber-400 font-semibold">
                    BEM KM UNRIYO KABINET SATYA KARSA 2026
                </span>

            </p>

        </div>

    </div>

</div>