@extends('layouts.app')

@section('content')

<div class="bg-[#F8FAFC] min-h-screen">

    <!-- HERO -->
    <section class="pt-8 pb-24 bg-gradient-to-b from-blue-50 to-white overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT -->
                <div>

                    <!-- BADGE -->
                    <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold mb-6 shadow-sm">
                        Portal Berita
                    </div>

                    <!-- TITLE -->
                    <h1 class="text-4xl lg:text-5xl font-black leading-tight text-slate-900">

                        Berita

                        <span class="text-amber-500">
                            & Informasi Kampus
                        </span>

                        Modern

                    </h1>

                    <!-- DESCRIPTION -->
                    <p class="text-slate-600 text-lg leading-relaxed mt-8 max-w-2xl">

                        Platform informasi digital mahasiswa Universitas Respati Yogyakarta
                        untuk publikasi kegiatan kampus,
                        organisasi mahasiswa,
                        seminar,
                        pengumuman akademik,
                        dan berita terbaru secara modern.

                    </p>

                    <!-- BUTTON -->
                    <div class="flex flex-wrap gap-4 mt-10">

                        <a href="#berita"
                           class="inline-flex items-center gap-3
                                  bg-blue-900
                                  hover:bg-blue-800
                                  text-white
                                  px-7 py-4
                                  rounded-2xl
                                  font-semibold
                                  shadow-md
                                  duration-300">

                            Jelajahi Berita

                            <span>→</span>

                        </a>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="relative">

                    <!-- BG -->
                    <div class="absolute w-[300px] h-[300px] bg-blue-100 rounded-full blur-3xl opacity-50"></div>

                    <!-- CARD -->
                    <div class="relative bg-white rounded-[28px]
                                border border-slate-100
                                shadow-xl p-8">

                        <!-- TOP -->
                        <div class="flex items-center justify-between mb-10">

                            <div>

                                <p class="text-sm text-slate-400">
                                    Informasi Terbaru
                                </p>

                                <h3 class="text-3xl font-black text-slate-900 mt-2">
                                    Pengumuman
                                </h3>

                            </div>

                            <!-- LOGO -->
                            <div class="w-20 h-20 flex items-center justify-center">

                                <img src="{{ asset('storage/logokabinet.png') }}"
                                     alt="Logo Kabinet"
                                     class="w-20 h-20 object-contain">

                            </div>

                        </div>

                        <!-- LIST -->
                        <div class="space-y-5">

                            @forelse($pengumuman as $item)

                            <a href="{{ route('public.berita.detail', $item->slug) }}"
                               class="group flex items-start gap-4
                                      p-5 rounded-3xl
                                      border border-slate-100
                                      hover:border-blue-200
                                      hover:bg-blue-50/50
                                      duration-300">

                                <!-- ICON -->
                                <div class="w-14 h-14 rounded-2xl
                                            bg-amber-100
                                            flex items-center justify-center
                                            text-2xl shrink-0">

                                    📢

                                </div>

                                <!-- CONTENT -->
                                <div class="flex-1 min-w-0">

                                    <div class="flex items-center justify-between gap-3">

                                        <h4 class="font-bold text-slate-900 line-clamp-2">

                                            {{ $item->judul }}

                                        </h4>

                                        <span class="text-slate-900 shrink-0">
                                            →
                                        </span>

                                    </div>

                                    <p class="text-slate-500 text-sm mt-2 line-clamp-2">

                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 70) }}

                                    </p>

                                </div>

                            </a>

                            @empty

                            <div class="text-center py-10">

                                <div class="text-5xl mb-4">
                                    📢
                                </div>

                                <h4 class="text-xl font-bold text-slate-900">
                                    Belum Ada Pengumuman
                                </h4>

                                <p class="text-slate-500 mt-2 text-sm">
                                    Berita kategori pengumuman akan tampil otomatis di sini.
                                </p>

                            </div>

                            @endforelse

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- BERITA -->
    <section id="berita" class="py-20 bg-slate-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            <!-- HEADER -->
            <div class="text-center mb-14">

                <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-900 px-3 py-1.5 rounded-full text-xs font-semibold mb-4">
                    Berita Kampus
                </div>

                <h2 class="text-3xl lg:text-4xl font-black text-slate-900 mt-4">
                    Informasi & Aktivitas Mahasiswa
                </h2>

                <p class="text-slate-500 text-lg mt-5 max-w-3xl mx-auto leading-relaxed">

                    Informasi terbaru mengenai kegiatan organisasi,
                    seminar,
                    pengumuman akademik,
                    dan aktivitas mahasiswa Universitas Respati Yogyakarta.

                </p>

            </div>

            <!-- GRID -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                @forelse($beritas as $berita)

                <!-- CARD -->
                <article class="group bg-white
                                rounded-[22px]
                                overflow-hidden
                                border border-slate-100
                                hover:-translate-y-1
                                hover:shadow-xl
                                duration-300">

                    <!-- IMAGE -->
                    <div class="relative overflow-hidden bg-slate-100">

                        @if($berita->thumbnail)

                        <img src="{{ url('public/upload/berita/' . $berita->thumbnail) }}"
                             alt="{{ $berita->judul }}"
                             loading="lazy"
                             class="w-full h-[220px]
                                    object-contain
                                    bg-slate-100
                                    p-2
                                    group-hover:scale-105
                                    duration-500">

                        @else

                        <div class="w-full h-[220px]
                                    bg-blue-50
                                    flex items-center justify-center
                                    text-5xl">

                            📰

                        </div>

                        @endif

                        <!-- CATEGORY -->
                        <div class="absolute top-3 left-3">

                            <span class="bg-white/90
                                         backdrop-blur-xl
                                         text-slate-900
                                         px-3 py-1.5
                                         rounded-full
                                         text-[10px]
                                         font-bold shadow">

                                {{ $berita->kategori }}

                            </span>

                        </div>

                    </div>

                    <!-- CONTENT -->
                    <div class="p-5">

                        <p class="text-xs text-slate-400">
                            {{ $berita->created_at->format('d M Y') }}
                        </p>

                        <h3 class="text-lg
                                   font-bold
                                   text-slate-900
                                   leading-snug
                                   mt-3
                                   line-clamp-2">

                            {{ $berita->judul }}

                        </h3>

                        <p class="text-sm
                                  text-slate-500
                                  leading-relaxed
                                  mt-3
                                  line-clamp-3">

                            {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 90) }}

                        </p>

                        <div class="mt-5">

                            <a href="{{ route('public.berita.detail', $berita->slug) }}"
                               class="inline-flex items-center gap-2
                                      text-sm font-semibold
                                      text-blue-900
                                      hover:text-blue-700
                                      duration-300">

                                Baca Selengkapnya

                                <span>→</span>

                            </a>

                        </div>

                    </div>

                </article>

                @empty

                <div class="col-span-full">

                    <div class="bg-white rounded-[28px]
                                border border-slate-100
                                p-12 text-center">

                        <div class="text-6xl mb-6">
                            📰
                        </div>

                        <h3 class="text-3xl font-black text-slate-900">
                            Belum Ada Berita
                        </h3>

                        <p class="text-slate-500 mt-4 max-w-lg mx-auto">
                            Berita yang dipublikasikan dari dashboard akan tampil otomatis di halaman ini.
                        </p>

                    </div>

                </div>

                @endforelse

            </div>

        </div>

    </section>

</div>

@endsection