@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="pt-8 pb-25 bg-gradient-to-b from-blue-50 to-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-5">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- CONTENT -->
            <div>

               <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-sm font-semibold mb-6 shadow-sm">
                    Tentang Kabinet
                </div>

                <h1 class="text-3xl lg:text-5xl font-black leading-tight text-slate-900 mb-5">

                    Kabinet
                    <span class="text-amber-500">
                        Satya Karsa
                    </span>

                </h1>

                <p class="text-lg text-blue-900 font-semibold mb-5">
                    “Berdaya, Bersama, Berdampak”
                </p>

                <p class="text-base text-slate-600 leading-relaxed mb-4">

                    Kabinet Satya Karsa hadir sebagai simbol semangat
                    pengabdian, kolaborasi, dan komitmen mahasiswa
                    dalam membangun organisasi yang aktif,
                    progresif, dan berdampak nyata.

                </p>

                <p class="text-base text-slate-600 leading-relaxed mb-7">

                    “Satya Karsa” bermakna kesetiaan dalam berkarya
                    dan ketulusan dalam mengabdi. Kabinet ini menjadi
                    ruang bagi mahasiswa untuk tumbuh bersama,
                    menyampaikan aspirasi, dan menghadirkan perubahan positif.

                </p>

                <div class="flex flex-wrap gap-3">

                    <a href="#kementerian"
                       class="bg-blue-900 hover:bg-blue-800 text-white px-5 py-3 rounded-xl text-sm font-semibold shadow-md duration-300">

                        Lihat Struktur

                    </a>

                    <a href="#program"
                       class="border border-slate-300 hover:border-amber-500 hover:text-amber-500 px-5 py-3 rounded-xl text-sm font-semibold duration-300">

                        Program Kerja

                    </a>

                </div>

            </div>


            <!-- LOGO -->
            <div class="relative flex justify-center">

                <!-- BG -->
                <div class="absolute w-[300px] h-[300px] bg-blue-100 rounded-full blur-3xl opacity-50"></div>

                <!-- CARD -->
                <div class="relative bg-white rounded-[28px] shadow-xl border border-slate-100 p-4">

    <img
        src="{{ asset('storage/logokabinet.png') }}"
        alt="Logo Kabinet"
        class="w-[340px] h-[340px] object-contain mx-auto"
    >

</div>

            </div>

        </div>

    </div>

</section>

<!-- VISI MISI -->
<section class="py-16 bg-slate-50">

    <div class="max-w-6xl mx-auto px-5">

        <div class="grid lg:grid-cols-2 gap-6">

            <!-- VISI -->
            <div class="bg-white rounded-[24px] p-7 border border-slate-100 shadow-md">

                <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl mb-5">
                    🎯
                </div>

                <h3 class="text-2xl font-black text-slate-900 mb-4">
                    Visi
                </h3>

                <p class="text-slate-600 leading-relaxed text-base">

                    Menjadikan BEM KM Universitas Respati Yogyakarta
                    sebagai organisasi mahasiswa yang aktif,
                    progresif, kolaboratif, dan berdampak positif
                    bagi mahasiswa maupun masyarakat.

                </p>

            </div>


            <!-- MISI -->
            <div class="bg-white rounded-[24px] p-7 border border-slate-100 shadow-md">

                <div class="w-14 h-14 rounded-2xl bg-amber-100 flex items-center justify-center text-2xl mb-5">
                    🚀
                </div>

                <h3 class="text-2xl font-black text-slate-900 mb-4">
                    Misi
                </h3>

                <ul class="space-y-3 text-slate-600 text-base leading-relaxed list-disc pl-5">

                    <li>Meningkatkan pelayanan mahasiswa berbasis digital.</li>

                    <li>Menjadi wadah aspirasi mahasiswa yang aktif.</li>

                    <li>Mendorong kolaborasi antar organisasi mahasiswa.</li>

                    <li>Mengembangkan potensi mahasiswa secara berkelanjutan.</li>

                </ul>

            </div>

        </div>

    </div>

</section>


<!-- STRUKTUR ORGANISASI -->
<section class="py-14 bg-gradient-to-b from-slate-50 to-white">

    <div class="max-w-6xl mx-auto px-5">

        <!-- HEADER -->
        <div class="text-center mb-10">

            <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-900 px-3 py-1.5 rounded-full text-xs font-semibold mb-4">
                Struktur Organisasi
            </div>

            <h2 class="text-2xl lg:text-3xl font-black text-slate-900 mb-3">
                Kabinet Satya Karsa
            </h2>

            <p class="text-sm text-slate-500 max-w-2xl mx-auto leading-relaxed">
                Struktur kepengurusan Badan Eksekutif Mahasiswa Keluarga Mahasiswa
                Universitas Respati Yogyakarta periode 2026.
            </p>

        </div>

        <!-- PRESMA -->
        <div class="flex justify-center">

            <div class="bg-gradient-to-r from-blue-900 to-blue-800 text-white rounded-[22px] px-6 py-5 shadow-lg text-center w-full max-w-md">

                <div class="w-16 h-16 bg-white/10 rounded-2xl mx-auto mb-4 flex items-center justify-center text-3xl border border-white/10">
                    👨‍🎓
                </div>

                <h3 class="text-xl font-black mb-1">
                    Presiden Mahasiswa
                </h3>

                <p class="text-blue-100 text-sm">
                    Maxnelmir Pukan Saiselar
                </p>

            </div>

        </div>

        <!-- GARIS -->
        <div class="flex justify-center">
            <div class="w-1 h-6 bg-slate-300 rounded-full"></div>
        </div>

        <!-- WAPRES -->
        <div class="flex justify-center mb-10">

            <div class="bg-white border border-slate-200 rounded-[20px] px-6 py-5 shadow-md text-center w-full max-w-sm">

                <div class="w-14 h-14 bg-amber-100 rounded-2xl mx-auto mb-3 flex items-center justify-center text-2xl">
                    👨‍💼
                </div>

                <h3 class="text-lg font-black text-slate-900 mb-1">
                    Wakil Presiden Mahasiswa
                </h3>

                <p class="text-blue-900 text-sm font-semibold">
                    Vemas Eka Septiagi
                </p>

            </div>

        </div>

        <!-- SEKRETARIS & KEUANGAN -->
        <div class="grid lg:grid-cols-2 gap-6 mb-10">

            <!-- SEKRETARIS -->
            <div class="space-y-3">

                <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl shrink-0">
                            🗂️
                        </div>

                        <div>

                            <h3 class="text-lg font-bold text-slate-900 mb-1">
                                Sekretaris Kabinet
                            </h3>

                            <p class="text-slate-500 text-sm">
                                Nama Menyusul
                            </p>

                        </div>

                    </div>

                </div>

                <div class="flex justify-center">
                    <div class="w-1 h-5 bg-slate-300 rounded-full"></div>
                </div>

                <div class="bg-slate-50 border border-slate-100 rounded-[20px] p-4 shadow-sm ml-6">

                    <div class="flex items-center gap-3">

                        <div class="w-12 h-12 rounded-xl bg-slate-200 flex items-center justify-center text-xl shrink-0">
                            📑
                        </div>

                        <div>

                            <h3 class="text-base font-bold text-slate-900 mb-1">
                                Sekretaris Umum
                            </h3>

                            <p class="text-slate-500 text-sm">
                                Nama Menyusul
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- KEUANGAN -->
            <div class="space-y-3">

                <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl bg-amber-100 flex items-center justify-center text-2xl shrink-0">
                            💳
                        </div>

                        <div>

                            <h3 class="text-lg font-bold text-slate-900 mb-1">
                                Kementerian Keuangan
                            </h3>

                            <p class="text-slate-500 text-sm">
                                Menteri: Nama Menyusul
                            </p>

                        </div>

                    </div>

                </div>

                <div class="flex justify-center">
                    <div class="w-1 h-5 bg-slate-300 rounded-full"></div>
                </div>

                <div class="bg-slate-50 border border-slate-100 rounded-[20px] p-4 shadow-sm ml-6">

                    <div class="flex items-center gap-3">

                        <div class="w-12 h-12 rounded-xl bg-slate-200 flex items-center justify-center text-xl shrink-0">
                            💰
                        </div>

                        <div>

                            <h3 class="text-base font-bold text-slate-900 mb-1">
                                Bendahara Negara
                            </h3>

                            <p class="text-slate-500 text-sm">
                                Nama Menyusul
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- TITLE KEMENTERIAN -->
        <div class="text-center mb-8">

            <h3 class="text-2xl font-black text-slate-900 mb-2">
                Kementerian Kabinet
            </h3>

            <p class="text-sm text-slate-500">
                Struktur kementerian Kabinet Satya Karsa
            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- ITEM -->
            <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md hover:-translate-y-1 hover:shadow-lg duration-300">

                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-2xl mb-4">
                    🏛️
                </div>

                <h4 class="text-base font-bold text-slate-900 mb-1">
                    Kementerian Dalam Negeri
                </h4>

                <p class="text-sm text-slate-500">
                    Menteri: Nama Menyusul
                </p>

            </div>
<!-- ITEM -->
            <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md hover:-translate-y-1 hover:shadow-lg duration-300">

                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-2xl mb-4">
                    👥
                </div>

                <h4 class="text-base font-bold text-slate-900 mb-1">
                    Kementerian Advokasi dan Kesma 
                </h4>

                <p class="text-sm text-slate-500">
                    Menteri: Nama Menyusul
                </p>

            </div>
            <!-- ITEM -->
            <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md hover:-translate-y-1 hover:shadow-lg duration-300">

                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-2xl mb-4">
                    ⚽
                </div>

                <h4 class="text-base font-bold text-slate-900 mb-1">
                    Kementerian Olahraga 
                </h4>

                <p class="text-sm text-slate-500">
                    Menteri: Nama Menyusul
                </p>

            </div>

<!-- ITEM -->
            <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md hover:-translate-y-1 hover:shadow-lg duration-300">

                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-2xl mb-4">
                    📷
                </div>

                <h4 class="text-base font-bold text-slate-900 mb-1">
                    Kementerian Media Informasi 
                </h4>

                <p class="text-sm text-slate-500">
                    Menteri: Nama Menyusul
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md hover:-translate-y-1 hover:shadow-lg duration-300">

                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-2xl mb-4">
                    🌍
                </div>

                <h4 class="text-base font-bold text-slate-900 mb-1">
                    Luar Negeri, Aksi & Politik
                </h4>

                <p class="text-sm text-slate-500">
                    Menteri: Nama Menyusul
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-white border border-slate-100 rounded-[20px] p-5 shadow-md hover:-translate-y-1 hover:shadow-lg duration-300">

                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-2xl mb-4">
                    📚
                </div>

                <h4 class="text-base font-bold text-slate-900 mb-1">
                    Pengembangan SDM
                </h4>

                <p class="text-sm text-slate-500">
                    Menteri: Nama Menyusul
                </p>

            </div>

        </div>

    </div>

</section>

<!-- PROGRAM KERJA -->
<section id="program" class="py-16 bg-slate-50">

    <div class="max-w-5xl mx-auto px-5">

        <!-- HEADER -->
        <div class="text-center mb-12">

            <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-900 px-3 py-1.5 rounded-full text-xs font-semibold mb-4">
                Program Kerja
            </div>

            <h2 class="text-3xl font-black text-slate-900 mb-3">
                Program Kerja Unggulan
            </h2>

            <p class="text-slate-500 text-sm max-w-2xl mx-auto leading-relaxed">
                Program strategis Kabinet Satya Karsa dalam mendukung
                pengembangan mahasiswa, organisasi, dan pelayanan kampus.
            </p>

        </div>

        <!-- LIST -->
        <div class="bg-white rounded-[28px] border border-slate-100 shadow-md divide-y divide-slate-100 overflow-hidden">

            <!-- ITEM -->
            <div class="flex gap-5 p-6 hover:bg-slate-50 duration-300">

                <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl shrink-0">
                    🎙️
                </div>

                <div>

                    <h3 class="text-lg font-bold text-slate-900 mb-1">
                        Podcast BEM KM
                    </h3>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Program media digital berbentuk podcast untuk membahas isu mahasiswa,
                        organisasi, inspirasi, dan informasi kampus bersama narasumber menarik.
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex gap-5 p-6 hover:bg-slate-50 duration-300">

                <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl shrink-0">
                    💻
                </div>

                <div>

                    <h3 class="text-lg font-bold text-slate-900 mb-1">
                        Website BEM KM
                    </h3>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Platform digital untuk pelayanan aspirasi mahasiswa,
                        administrasi organisasi, publikasi berita, dan informasi kampus.
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex gap-5 p-6 hover:bg-slate-50 duration-300">

                <div class="w-12 h-12 rounded-2xl bg-pink-100 flex items-center justify-center text-2xl shrink-0">
                    👩
                </div>

                <div>

                    <h3 class="text-lg font-bold text-slate-900 mb-1">
                        Hari Kartini
                    </h3>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Kegiatan peringatan Hari Kartini sebagai bentuk apresiasi
                        terhadap peran perempuan dalam pendidikan, organisasi,
                        dan pembangunan generasi muda.
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex gap-5 p-6 hover:bg-slate-50 duration-300">

                <div class="w-12 h-12 rounded-2xl bg-red-100 flex items-center justify-center text-2xl shrink-0">
                    🚭
                </div>

                <div>

                    <h3 class="text-lg font-bold text-slate-900 mb-1">
                        Sosialisasi Narkotika & Rokok Ilegal
                    </h3>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Edukasi mahasiswa mengenai bahaya narkotika,
                        rokok ilegal, serta pentingnya menjaga lingkungan
                        kampus yang sehat dan bebas penyalahgunaan zat berbahaya.
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex gap-5 p-6 hover:bg-slate-50 duration-300">

                <div class="w-12 h-12 rounded-2xl bg-amber-100 flex items-center justify-center text-2xl shrink-0">
                    🎓
                </div>

                <div>

                    <h3 class="text-lg font-bold text-slate-900 mb-1">
                        Sekolah Organisasi
                    </h3>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Program pengembangan kepemimpinan dan manajemen organisasi
                        bagi mahasiswa untuk menciptakan kader organisasi
                        yang aktif, progresif, dan profesional.
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex gap-5 p-6 hover:bg-slate-50 duration-300">

                <div class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center text-2xl shrink-0">
                    🏆
                </div>

                <div>

                    <h3 class="text-lg font-bold text-slate-900 mb-1">
                        Pra PORSENI KM & PORSENI KM
                    </h3>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Kompetisi olahraga dan seni antar mahasiswa
                        untuk meningkatkan solidaritas, sportivitas,
                        dan semangat kebersamaan di lingkungan kampus.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection