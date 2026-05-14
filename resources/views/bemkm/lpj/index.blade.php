@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Laporan Pertanggungjawaban (LPJ)
        </h1>

        <p class="text-gray-500 mt-2">
            Kelola dan verifikasi LPJ kegiatan organisasi mahasiswa.
        </p>

    </div>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total LPJ
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                {{ $totalLpj }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">

                📘

            </div>

        </div>

    </div>

    <!-- PENDING -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Menunggu Verifikasi
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                {{ $pendingLpj }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">

                ⏳

            </div>

        </div>

    </div>

    <!-- DISETUJUI -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Disetujui
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-green-500">
                {{ $approvedLpj }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">

                ✅

            </div>

        </div>

    </div>

    <!-- REVISI / DITOLAK -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Revisi / Ditolak
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-red-500">
                {{ $rejectedLpj }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center text-2xl">

                ❌

            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <div class="overflow-x-auto">

        <table class="w-full">

            <!-- HEAD -->
            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 font-bold text-[#041C64]">
                        Kegiatan
                    </th>

                    <th class="text-left px-6 py-4 font-bold text-[#041C64]">
                        Organisasi
                    </th>

                    <th class="text-left px-6 py-4 font-bold text-[#041C64]">
                        Dana
                    </th>

                    <th class="text-left px-6 py-4 font-bold text-[#041C64]">
                        Status
                    </th>

                    <th class="text-left px-6 py-4 font-bold text-[#041C64]">
                        Tanggal
                    </th>

                    <th class="text-left px-6 py-4 font-bold text-[#041C64]">
                        Aksi
                    </th>

                </tr>

            </thead>

            <!-- BODY -->
            <tbody>

                @forelse($lpjs as $lpj)

                <tr class="border-t hover:bg-gray-50 transition">

                    <!-- KEGIATAN -->
                    <td class="px-6 py-5">

                        <h3 class="font-semibold text-[#041C64]">

                            {{ $lpj->judul }}

                        </h3>

                        <p class="text-sm text-gray-500 mt-1">

                            {{ $lpj->deskripsi }}

                        </p>

                    </td>

                    <!-- ORGANISASI -->
                    <td class="px-6 py-5 text-gray-600">

                        {{ $lpj->user->name ?? '-' }}

                    </td>

                    <!-- DANA -->
                    <td class="px-6 py-5 font-semibold text-[#041C64]">

                        Rp {{ number_format($lpj->dana, 0, ',', '.') }}

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-5">

                        @if($lpj->status == 'disetujui')

                            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                                Disetujui

                            </span>

                        @elseif($lpj->status == 'revisi')

                            <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                                Revisi

                            </span>

                        @elseif($lpj->status == 'ditolak')

                            <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-xs font-semibold">

                                Ditolak

                            </span>

                        @else

                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">

                                Pending

                            </span>

                        @endif

                    </td>

                    <!-- TANGGAL -->
                    <td class="px-6 py-5 text-gray-500">

                        {{ $lpj->created_at->format('d M Y') }}

                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-5">

                        <div class="flex flex-wrap gap-2">

                        <!-- DOWNLOAD -->
                            <a href="{{ asset('uploads/lpj/' . $lpj->file) }}"
                            target="_blank"
                            class="bg-green-100 hover:bg-green-200
                            text-green-700 px-4 py-2 rounded-xl
                            text-sm font-semibold transition">

                                Download

                            </a>

                            <!-- ACC -->
                            <form action="{{ route('bemkm.lpj.updateStatus', $lpj->id) }}"
                                  method="POST">

                                @csrf
                                @method('PATCH')

                                <input type="hidden"
                                       name="status"
                                       value="disetujui">

                                <button type="submit"
                                        class="bg-emerald-100 hover:bg-emerald-200
                                        text-emerald-700 px-4 py-2 rounded-xl
                                        text-sm font-semibold transition">

                                    ACC

                                </button>

                            </form>

                            <!-- REVISI -->
                            <form action="{{ route('bemkm.lpj.updateStatus', $lpj->id) }}"
                                  method="POST">

                                @csrf
                                @method('PATCH')

                                <input type="hidden"
                                       name="status"
                                       value="revisi">

                                <button type="submit"
                                        class="bg-yellow-100 hover:bg-yellow-200
                                        text-yellow-700 px-4 py-2 rounded-xl
                                        text-sm font-semibold transition">

                                    Revisi

                                </button>

                            </form>

                            <!-- TOLAK -->
                            <form action="{{ route('bemkm.lpj.updateStatus', $lpj->id) }}"
                                  method="POST">

                                @csrf
                                @method('PATCH')

                                <input type="hidden"
                                       name="status"
                                       value="ditolak">

                                <button type="submit"
                                        class="bg-red-100 hover:bg-red-200
                                        text-red-700 px-4 py-2 rounded-xl
                                        text-sm font-semibold transition">

                                    Tolak

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="text-center py-10 text-gray-500">

                        Belum ada LPJ diajukan.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection