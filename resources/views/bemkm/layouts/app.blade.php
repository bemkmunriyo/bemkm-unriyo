<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BEM KM UNRIYO</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

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
    transition-transform duration-300
    lg:translate-x-0 -translate-x-full">

    <!-- LOGO -->
    <div class="px-8 py-8 border-b border-white/10">

        <div class="flex items-center justify-between">

            <div class="flex items-center gap-4">

                <div class="w-14 h-14 rounded-2xl bg-[#0B2B8A] flex items-center justify-center shadow-lg">

                    <span class="text-2xl">
                        🎓
                    </span>

                </div>

                <div>

                    <h1 class="text-2xl font-bold">
                        BEM KM
                    </h1>

                    <p class="text-xs text-gray-300 mt-1 leading-5">
                        UNIVERSITAS RESPATI
                        <br>
                        YOGYAKARTA
                    </p>

                </div>

            </div>

            <!-- CLOSE MOBILE -->
            <button onclick="toggleSidebar()"
                    class="lg:hidden text-2xl">

                ✕

            </button>

        </div>

    </div>

    <!-- MENU -->
    <div class="px-5 py-6 space-y-2">

        <!-- DASHBOARD -->
        <a href="{{ route('bemkm.dashboard') }}"
           class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
           {{ request()->routeIs('bemkm.dashboard') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>🏠</span>

            <span class="text-sm font-medium">
                Dashboard
            </span>

        </a>

        <!-- PROPOSAL -->
        <a href="{{ route('bemkm.proposal.index') }}"
           class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
           {{ request()->routeIs('bemkm.proposal.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>📄</span>

            <span class="text-sm font-medium">
                Proposal
            </span>

        </a>

        <!-- LPJ -->
        <a href="{{ route('bemkm.lpj.index') }}"
           class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
           {{ request()->routeIs('bemkm.lpj.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>📘</span>

            <span class="text-sm font-medium">
                LPJ
            </span>

        </a>

        <!-- BERITA -->
        <a href="{{ route('bemkm.berita.index') }}"
           class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
           {{ request()->routeIs('bemkm.berita.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>📰</span>

            <span class="text-sm font-medium">
                Berita
            </span>

        </a>

        <!-- INVENTARIS -->
        <a href="{{ route('bemkm.inventaris.index') }}"
           class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
           {{ request()->routeIs('bemkm.inventaris.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>📦</span>

            <span class="text-sm font-medium">
                Inventaris
            </span>

        </a>

        <!-- PEMINJAMAN -->
        <a href="{{ route('bemkm.peminjaman.index') }}"
           class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
           {{ request()->routeIs('bemkm.peminjaman.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>🔄</span>

            <span class="text-sm font-medium">
                Peminjaman
            </span>

        </a>

        <!-- ORGANISASI -->
        <a href="{{ route('bemkm.organisasi.index') }}"
           class="flex items-center gap-4 px-5 py-4 rounded-2xl transition
           {{ request()->routeIs('bemkm.organisasi.*') ? 'bg-[#1A46D3] border-l-4 border-[#FFD54A] shadow-lg' : 'hover:bg-white/10' }}">

            <span>🏢</span>

            <span class="text-sm font-medium">
                Organisasi
            </span>

        </a>

    </div>

</aside>

<!-- OVERLAY -->
<div id="overlay"
     onclick="toggleSidebar()"
     class="hidden fixed inset-0 bg-black/40 z-40 lg:hidden">
</div>

<!-- MAIN -->
<div class="lg:ml-72">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-30 bg-white border-b border-gray-200 px-6 lg:px-8 py-5 flex justify-between items-center">

        <!-- LEFT -->
        <div class="flex items-center gap-4">

            <!-- TOGGLE -->
            <button onclick="toggleSidebar()"
                    class="lg:hidden text-3xl text-[#041C64]">

                ☰

            </button>

            <div>

                <h2 class="text-2xl font-bold text-[#041C64]">
                    Dashboard
                </h2>

                <p class="text-sm text-gray-500">
                    BEM KM UNRIYO
                </p>

            </div>

        </div>

        <!-- PROFILE -->
        <div class="flex items-center gap-4">

            <div class="hidden md:block text-right">

                <h4 class="font-semibold text-[#041C64]">
                    Administrator
                </h4>

                <p class="text-sm text-gray-500">
                    BEM KM
                </p>

            </div>

            <div class="w-12 h-12 rounded-full bg-[#1A46D3] text-white flex items-center justify-center font-bold">

                A

            </div>

        </div>

    </header>

    <!-- CONTENT -->
    <section class="p-6 lg:p-8">

        @yield('content')

    </section>

</div>

<!-- SCRIPT -->
<script>

function toggleSidebar() {

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');

}

</script>

</body>
</html>