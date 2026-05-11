@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Ormawa & UKM - BEM KM UNRIYO</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>

        body{
            font-family: 'Inter', sans-serif;
        }

    </style>

</head>

<body class="bg-slate-100 text-slate-800">

<!-- BACKGROUND -->
<div class="fixed inset-0 overflow-hidden -z-10">

    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-blue-200 rounded-full blur-3xl opacity-40"></div>

    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-amber-200 rounded-full blur-3xl opacity-40"></div>

</div>

<!-- CONTAINER -->
<section class="min-h-screen flex items-center justify-center px-6 py-16">

    <div class="max-w-6xl w-full grid lg:grid-cols-2 bg-white rounded-[40px] overflow-hidden shadow-2xl border border-slate-200">

        <!-- LEFT -->
        <div class="bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 text-white p-14 relative overflow-hidden">

            <!-- EFFECT -->
            <div class="absolute top-0 right-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">

                <!-- LOGO -->
                <div class="flex items-center gap-4 mb-14">

                    <div class="w-16 h-16 rounded-3xl bg-white/15 backdrop-blur-lg flex items-center justify-center text-3xl font-black">

                        B

                    </div>

                    <div>

                        <h1 class="text-2xl font-black">
                            BEM KM UNRIYO
                        </h1>

                        <p class="text-blue-100">
                            Sistem Organisasi Mahasiswa
                        </p>

                    </div>

                </div>

                <!-- TEXT -->
                <div class="mb-14">

                    <div class="inline-flex items-center bg-white/10 px-4 py-2 rounded-full text-sm font-medium mb-6">

                        Dashboard Organisasi Mahasiswa

                    </div>

                    <h2 class="text-5xl font-black leading-tight mb-8">

                        Login
                        <span class="text-amber-400">

                            Ormawa & UKM

                        </span>

                    </h2>

                    <p class="text-lg text-blue-100 leading-relaxed">

                        Platform digital pengajuan proposal, LPJ,
                        administrasi organisasi, dan layanan aspirasi mahasiswa
                        secara modern dan terintegrasi.

                    </p>

                </div>

                <!-- FITUR -->
                <div class="space-y-5">

                    <!-- FITUR -->
                    <div class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-2xl p-5">

                        <div class="w-12 h-12 rounded-2xl bg-amber-400/20 flex items-center justify-center text-xl">

                            📄

                        </div>

                        <div>

                            <h3 class="font-bold text-lg">
                                Pengajuan Proposal
                            </h3>

                            <p class="text-blue-100 text-sm">
                                Pengajuan proposal kegiatan secara online
                            </p>

                        </div>

                    </div>

                    <!-- FITUR -->
                    <div class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-2xl p-5">

                        <div class="w-12 h-12 rounded-2xl bg-amber-400/20 flex items-center justify-center text-xl">

                            ✅

                        </div>

                        <div>

                            <h3 class="font-bold text-lg">
                                Verifikasi Digital
                            </h3>

                            <p class="text-blue-100 text-sm">
                                Verifikasi BEM KM & DPM KM terintegrasi
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="p-10 lg:p-14 flex items-center">

            <div class="w-full">

                <!-- HEADER -->
                <div class="mb-10">

                    <h2 class="text-4xl font-black text-slate-900 mb-3">

                        Selamat Datang 👋

                    </h2>

                    <p class="text-slate-500 text-lg">

                        Login menggunakan akun organisasi Anda

                    </p>

                </div>

                <!-- FORM -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">

                    @csrf

                    <!-- ERROR -->
                    @if ($errors->any())

                        <div class="bg-red-100 border border-red-200 text-red-700 px-4 py-3 rounded-2xl">

                            Username atau password salah.

                        </div>

                    @endif

                    <!-- USERNAME -->
                    <div>

                        <label class="block text-sm font-semibold text-slate-700 mb-3">

                            Username Organisasi

                        </label>

                        <input
                            type="text"
                            name="username"
                            placeholder="Masukkan username"
                            required
                            autofocus
                            class="w-full border border-slate-200 focus:border-blue-900 focus:ring-4 focus:ring-blue-100 rounded-2xl px-5 py-4 outline-none duration-300 bg-slate-50"
                        >

                    </div>

                    <!-- PASSWORD -->
                    <div>

                        <label class="block text-sm font-semibold text-slate-700 mb-3">

                            Password

                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Masukkan password"
                            required
                            class="w-full border border-slate-200 focus:border-blue-900 focus:ring-4 focus:ring-blue-100 rounded-2xl px-5 py-4 outline-none duration-300 bg-slate-50"
                        >

                    </div>

                    <!-- REMEMBER -->
                    <div class="flex items-center justify-between">

                        <label class="flex items-center gap-3 text-slate-600">

                            <input
                                type="checkbox"
                                name="remember"
                                class="w-4 h-4 rounded border-slate-300">

                            <span>

                                Ingat saya

                            </span>

                        </label>

                        <a href="#"
                           class="text-blue-900 font-semibold hover:text-amber-500 duration-300">

                            Lupa Password?

                        </a>

                    </div>

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="w-full bg-blue-900 hover:bg-blue-800 text-white py-4 rounded-2xl font-bold text-lg shadow-xl duration-300"
                    >

                        Login Dashboard

                    </button>

                </form>

                <!-- INFO -->
                <div class="mt-10 bg-amber-50 border border-amber-200 rounded-2xl p-5">

                    <div class="flex gap-4">

                        <div class="text-2xl">

                            🔒

                        </div>

                        <div>

                            <h3 class="font-bold text-slate-900 mb-1">

                                Keamanan Sistem

                            </h3>

                            <p class="text-slate-600 text-sm leading-relaxed">

                                Semua data proposal, LPJ, dan administrasi organisasi
                                dijaga kerahasiaannya dan hanya digunakan untuk kebutuhan
                                verifikasi resmi BEM KM dan DPM KM.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- BACK -->
                <div class="mt-8 text-center">

                    <a href="/"
                       class="text-slate-500 hover:text-blue-900 duration-300 font-medium">

                        ← Kembali ke Beranda

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

</body>
</html>

@endsection