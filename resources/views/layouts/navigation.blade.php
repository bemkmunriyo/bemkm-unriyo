<nav x-data="{ open: false }"
     class="fixed top-0 left-0 w-full z-50 bg-white border-b border-slate-200 shadow-sm">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex items-center justify-between h-20">

            <!-- LOGO -->
            <a href="/" class="flex items-center gap-4 group">

                <!-- ICON -->
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-950 to-blue-800 flex items-center justify-center shadow-lg">

                   <div class="w-20 h-20
            flex items-center justify-center">

    <img src="{{ asset('storage/logokabinet.png') }}"
         alt="Logo UNRIYO"
         class="w-20 h-20 object-contain">

</div>

                </div>

                <!-- TEXT -->
                <div>

                    <h1 class="text-2xl font-black text-blue-950 leading-tight tracking-wide">
                        BEM KM
                    </h1>

                    <p class="text-xs text-slate-500 uppercase tracking-[3px]">
                        Universitas Respati Yogyakarta
                    </p>

                </div>

            </a>

            <!-- DESKTOP MENU -->
            <div class="hidden lg:flex items-center gap-2">

                <a href="/"
                   class="px-5 py-2.5 rounded-xl text-slate-700 hover:text-blue-950 hover:bg-blue-50 font-semibold duration-300">

                    Beranda

                </a>

                <a href="/tentang"
                   class="px-5 py-2.5 rounded-xl text-slate-700 hover:text-blue-950 hover:bg-blue-50 font-semibold duration-300">

                    Tentang Kami

                </a>

                <a href="/berita"
                   class="px-5 py-2.5 rounded-xl text-slate-700 hover:text-blue-950 hover:bg-blue-50 font-semibold duration-300">

                    Berita

                </a>

                <a href="/aspirasi"
                   class="px-5 py-2.5 rounded-xl text-slate-700 hover:text-blue-950 hover:bg-blue-50 font-semibold duration-300">

                    Aspirasi Mahasiswa

                </a>

            </div>

            <!-- RIGHT -->
            <div class="hidden lg:flex items-center gap-4">

                <!-- LOGIN -->
                <a href="{{ route('login') }}"
                   class="bg-amber-400 hover:bg-amber-500
                   text-[#041C64] px-8 py-4 rounded-2xl font-bold shadow-lg duration-300">

                    Login

                </a>

            </div>

            <!-- MOBILE BUTTON -->
            <button
                @click="open = ! open"
                class="lg:hidden w-12 h-12 rounded-2xl border border-slate-200 flex items-center justify-center text-blue-950 hover:bg-slate-100 duration-300">

                <!-- ICON -->
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />

                </svg>

            </button>

        </div>

    </div>

    <!-- MOBILE MENU -->
    <div x-show="open"
         x-transition
         class="lg:hidden bg-white border-t border-slate-200 shadow-xl">

        <div class="px-6 py-6 space-y-3">

            <!-- MENU -->
            <a href="/"
               class="block px-5 py-4 rounded-2xl text-slate-700 hover:bg-blue-50 hover:text-blue-950 font-semibold duration-300">

                🏠 Beranda

            </a>

            <a href="/tentang"
               class="block px-5 py-4 rounded-2xl text-slate-700 hover:bg-blue-50 hover:text-blue-950 font-semibold duration-300">

                ℹ️ Tentang Kami

            </a>

            <a href="/berita"
               class="block px-5 py-4 rounded-2xl text-slate-700 hover:bg-blue-50 hover:text-blue-950 font-semibold duration-300">

                📰 Berita

            </a>

            <a href="/aspirasi"
               class="block px-5 py-4 rounded-2xl text-slate-700 hover:bg-blue-50 hover:text-blue-950 font-semibold duration-300">

                📢 Aspirasi Mahasiswa

            </a>

            <!-- LOGIN -->
            <div class="pt-4">

                <a href="{{ route('login') }}"
                   class="block w-full text-center
                   bg-amber-400 hover:bg-amber-500
                   text-[#041C64] px-6 py-4 rounded-2xl
                   font-bold shadow-lg duration-300">

                    Login

                </a>

            </div>

        </div>

    </div>

</nav>

<!-- SPACER -->
<div class="h-20"></div>