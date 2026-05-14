<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUPER ADMIN</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        body{
            font-family: 'Inter', sans-serif;
            background: #F5F7FB;
        }

    </style>

</head>

<body class="overflow-x-hidden">

<!-- SIDEBAR -->
<aside id="sidebar"
class="fixed top-0 left-0 z-50
w-72 h-screen overflow-y-auto
bg-gradient-to-b from-[#041C64] to-[#00113D]
text-white shadow-2xl
flex flex-col">

    <!-- LOGO -->
    <div class="px-8 py-8 border-b border-white/10">

        <div class="flex items-center gap-4">

            <div class="w-14 h-14 rounded-2xl bg-[#0B2B8A]
            flex items-center justify-center shadow-lg">

                <span class="text-2xl">
                    ⚙️
                </span>

            </div>

            <div>

                <h1 class="text-2xl font-bold">
                    SUPER ADMIN
                </h1>

                <p class="text-xs text-gray-300 mt-1 leading-5">
                    SISTEM ORGANISASI
                    <br>
                    UNIVERSITAS RESPATI
                </p>

            </div>

        </div>

    </div>

    <!-- MENU -->
    <div class="px-5 py-6 space-y-2 flex-1">

        <!-- DASHBOARD -->
        <a href="{{ route('superadmin.dashboard') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
        {{ request()->routeIs('superadmin.dashboard') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>🏠</span>

            <span class="text-sm font-medium">
                Dashboard
            </span>

        </a>

        <!-- ASPIRASI -->
        <a href="{{ route('superadmin.aspirasi.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
        {{ request()->routeIs('superadmin.aspirasi.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>📢</span>

            <span class="text-sm font-medium">
                Aspirasi Mahasiswa
            </span>

        </a>

        <!-- PROPOSAL -->
        <a href="{{ route('superadmin.proposallpj.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
        {{ request()->routeIs('superadmin.proposallpj.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>📄</span>

            <span class="text-sm font-medium">
                Proposal & LPJ
            </span>

        </a>

        <!-- INVENTARIS -->
        <a href="{{ route('superadmin.inventaris.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
        {{ request()->routeIs('superadmin.inventaris.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>📦</span>

            <span class="text-sm font-medium">
                Inventaris
            </span>

        </a>

        <!-- AKUN -->
        <a href="{{ route('superadmin.akun.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
        {{ request()->routeIs('superadmin.akun.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>👥</span>

            <span class="text-sm font-medium">
                Manajemen Akun
            </span>

        </a>

    </div>

    <!-- LOGOUT -->
    <div class="px-5 pb-6">

        <form method="POST"
              action="{{ route('logout') }}"
              class="pt-5 mt-5 border-t border-white/10">

            @csrf

            <button type="submit"
                    class="w-full flex items-center gap-3
                           px-4 py-3
                           rounded-xl
                           bg-red-500/90
                           hover:bg-red-600
                           transition-all duration-300">

                <!-- ICON -->
                <span class="text-base">
                    ⎋
                </span>

                <!-- TEXT -->
                <span class="text-sm font-semibold">
                    Logout
                </span>

            </button>

        </form>

    </div>

</aside>

<!-- MAIN -->
<div class="lg:ml-72">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-30
    bg-white border-b border-gray-200
    px-8 py-5 flex justify-between items-center">

        <!-- LEFT -->
        <div>

            <h2 class="text-2xl font-bold text-[#041C64]">
                Dashboard Super Admin
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Sistem Pengelolaan Organisasi Mahasiswa
            </p>

        </div>

        <!-- PROFILE -->
        <div class="flex items-center gap-4">

            <div class="hidden md:block text-right">

                <h4 class="font-semibold text-[#041C64]">
                    Super Admin
                </h4>

                <p class="text-sm text-gray-500">
                    Administrator Sistem
                </p>

            </div>

            <div class="w-12 h-12 rounded-full
            bg-[#1A46D3]
            text-white
            flex items-center justify-center
            font-bold">

                A

            </div>

        </div>

    </header>

    <!-- CONTENT -->
    <section class="p-8">

        @yield('content')

    </section>

</div>

</body>
</html>