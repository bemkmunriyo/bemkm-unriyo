@extends('superadmin.layouts.app')

@section('content')

<!-- HEADER -->
<div class="mb-8">

    <h1 class="text-3xl font-bold text-[#041C64]">
        Dashboard Super Admin
    </h1>

    <p class="text-gray-500 mt-2">
        Sistem pusat pengelolaan organisasi mahasiswa.
    </p>

</div>

<!-- CARD -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <!-- ASPIRASI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Aspirasi Mahasiswa
        </p>

        <h2 class="text-4xl font-bold text-[#041C64] mt-4">
            32
        </h2>

    </div>

    <!-- PROPOSAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Proposal & LPJ
        </p>

        <h2 class="text-4xl font-bold text-green-500 mt-4">
            18
        </h2>

    </div>

    <!-- INVENTARIS -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Inventaris
        </p>

        <h2 class="text-4xl font-bold text-yellow-500 mt-4">
            12
        </h2>

    </div>

    <!-- AKUN -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Akun
        </p>

        <h2 class="text-4xl font-bold text-red-500 mt-4">
            45
        </h2>

    </div>

</div>

@endsection