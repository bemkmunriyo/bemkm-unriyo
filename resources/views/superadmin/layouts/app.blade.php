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
class="fixed top-0 left-0 z-50 w-72 h-screen overflow-y-auto
bg-gradient-to-b from-[#041C64] to-[#00113D]
text-white shadow-2xl">

    <!-- LOGO -->
    <div class="px-8 py-8 border-b border-white/10">

        <div class="flex items-center gap-4">

            <div class="w-14 h-14 rounded-2xl bg-[#0B2B8A]
            flex items-center justify-center">

                ⚙️

            </div>

            <div>

                <h1 class="text-2xl font-bold">
                    SUPER ADMIN
                </h1>

                <p class="text-xs text-gray-300 mt-1">
                    SISTEM ORGANISASI
                </p>

            </div>

        </div>

    </div>

    <!-- MENU -->
    <div class="px-5 py-6 space-y-2">

        <!-- DASHBOARD -->
        <a href="{{ route('superadmin.dashboard') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

            🏠 Dashboard

        </a>

        <!-- ASPIRASI -->
        <a href="{{ route('superadmin.aspirasi.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

            📢 Aspirasi Mahasiswa

        </a>

        <!-- PROPOSAL -->
        <a href="{{ route('superadmin.proposallpj.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

            📄 Proposal & LPJ

        </a>

        <!-- INVENTARIS -->
        <a href="{{ route('superadmin.inventaris.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

            📦 Inventaris

        </a>

        <!-- AKUN -->
        <a href="{{ route('superadmin.akun.index') }}"
        class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-white/10">

            👥 Manajemen Akun

        </a>

    </div>

</aside>

<!-- MAIN -->
<div class="lg:ml-72">

    <!-- NAVBAR -->
    <header class="bg-white border-b border-gray-200 px-8 py-5">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Dashboard Super Admin
        </h2>

    </header>

    <!-- CONTENT -->
    <section class="p-8">

        @yield('content')

    </section>

</div>

</body>
</html>