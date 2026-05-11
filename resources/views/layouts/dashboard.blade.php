<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Dashboard ORMAWA & UKM')
    </title>

    @vite('resources/css/app.css')

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-slate-50">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="hidden lg:flex flex-col justify-between w-72 bg-gradient-to-b from-blue-950 via-blue-900 to-blue-800 text-white min-h-screen p-6 border-r border-blue-800 shadow-2xl fixed left-0 top-0">

        <div>

            <!-- LOGO -->
            <div class="mb-10">

                <div class="flex items-center gap-4 mb-4">

                    <div class="w-14 h-14 rounded-2xl bg-amber-400 flex items-center justify-center text-2xl shadow-lg">
                        🏛️
                    </div>

                    <div>
                        <h1 class="text-2xl font-black leading-tight">
                            ORMAWA & UKM
                        </h1>

                        <p class="text-blue-100 text-sm">
                            Sistem Administrasi
                        </p>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-amber-400 to-transparent"></div>

            </div>

            <!-- MENU -->
            <div class="space-y-2">

                <!-- DASHBOARD -->
                <a href="{{ route('ormawaukm.ormawaukm') }}"
                   class="flex items-center gap-4 px-5 py-4 rounded-2xl duration-300
                   {{ request()->routeIs('ormawaukm.ormawaukm')
                        ? 'bg-gradient-to-r from-amber-400 to-amber-300 text-blue-950 font-bold shadow-lg'
                        : 'hover:bg-white/10 text-blue-50' }}">

                    <span class="text-xl">📊</span>
                    Dashboard
                </a>

                <!-- PROPOSAL -->
                <a href="{{ route('ormawaukm.proposal') }}"
                   class="flex items-center gap-4 px-5 py-4 rounded-2xl duration-300
                   {{ request()->routeIs('ormawaukm.proposal')
                        ? 'bg-gradient-to-r from-amber-400 to-amber-300 text-blue-950 font-bold shadow-lg'
                        : 'hover:bg-white/10 text-blue-50' }}">

                    <span class="text-xl">📄</span>
                    Pengajuan Proposal
                </a>

                <!-- LPJ -->
                <a href="{{ route('ormawaukm.lpj') }}"
                   class="flex items-center gap-4 px-5 py-4 rounded-2xl duration-300
                   {{ request()->routeIs('ormawaukm.lpj')
                        ? 'bg-gradient-to-r from-amber-400 to-amber-300 text-blue-950 font-bold shadow-lg'
                        : 'hover:bg-white/10 text-blue-50' }}">

                    <span class="text-xl">📝</span>
                    Upload LPJ
                </a>

                <!-- PEMINJAMAN -->
                <a href="{{ route('ormawaukm.peminjaman') }}"
                   class="flex items-center gap-4 px-5 py-4 rounded-2xl duration-300
                   {{ request()->routeIs('ormawaukm.peminjaman')
                        ? 'bg-gradient-to-r from-amber-400 to-amber-300 text-blue-950 font-bold shadow-lg'
                        : 'hover:bg-white/10 text-blue-50' }}">

                    <span class="text-xl">📦</span>
                    Peminjaman Barang
                </a>

                <!-- STATUS -->
                <a href="{{ route('ormawaukm.status') }}"
                   class="flex items-center gap-4 px-5 py-4 rounded-2xl duration-300
                   {{ request()->routeIs('ormawaukm.status')
                        ? 'bg-gradient-to-r from-amber-400 to-amber-300 text-blue-950 font-bold shadow-lg'
                        : 'hover:bg-white/10 text-blue-50' }}">

                    <span class="text-xl">📌</span>
                    Status Pengajuan
                </a>

            </div>

        </div>

        <!-- FOOTER -->
        <div>

            <div class="bg-white/10 backdrop-blur-sm border border-white/10 rounded-3xl p-5">

                <p class="text-sm text-blue-100 leading-relaxed mb-3">
                    Sistem Administrasi ORMAWA & UKM
                </p>

                <div class="flex items-center gap-2 text-amber-300 text-sm font-semibold mb-4">
                    <span>●</span>
                    Online System
                </div>

                <!-- LOGOUT -->
                <form method="POST" action="#">
                    @csrf
                    <button type="submit"
                        class="w-full bg-red-500 hover:bg-red-600 text-white py-3 rounded-2xl font-semibold duration-300">
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </aside>

    <!-- MAIN -->
    <main class="flex-1 lg:ml-72 min-h-screen">

        <!-- TOPBAR -->
        <header class="bg-white border-b border-slate-200 px-8 py-5 sticky top-0 z-40">

            <div class="flex items-center justify-between">

                <div>
                    <h2 class="text-2xl font-black text-slate-900">
                        @yield('page-title', 'Dashboard')
                    </h2>

                    <p class="text-slate-500 text-sm">
                        @yield('page-description', 'Sistem ORMAWA & UKM')
                    </p>
                </div>

                <!-- PROFILE -->
                <div class="flex items-center gap-4">

                    <div class="text-right">
                        <h3 class="font-bold text-slate-900 text-sm">
                            @yield('user-name', 'User')
                        </h3>

                        <p class="text-slate-500 text-xs">
                            @yield('user-role', 'Member')
                        </p>
                    </div>

                    <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-xl">
                        👤
                    </div>

                </div>

            </div>

        </header>

        <!-- CONTENT -->
        <div class="p-8">
            @yield('content')
        </div>

    </main>

</div>

</body>
</html>