@extends('bemkm.layouts.app')

@section('content')

<div class="space-y-6">

    <!-- HEADER -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">

        <div>

            <h1 class="text-3xl font-bold text-[#041C64]">
                Surat Masuk ORMAWA
            </h1>

            <p class="text-gray-500 mt-2">
                Verifikasi surat kegiatan dari organisasi mahasiswa dan Unit Kegiatan Mahasiswa.
            </p>

        </div>

        <!-- TOTAL -->
        <div class="bg-white px-6 py-4 rounded-2xl shadow-sm border border-gray-100">

            <p class="text-sm text-gray-500">
                Total Surat Masuk
            </p>

            <h2 class="text-3xl font-bold text-[#041C64] mt-2">
                {{ $surats->count() }}
            </h2>

        </div>

    </div>

    <!-- ALERT -->
    @if(session('success'))

    <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-2xl">

        {{ session('success') }}

    </div>

    @endif

    <!-- TABLE -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full">

                <!-- HEADER -->
                <thead class="bg-gray-50 border-b border-gray-100">

                    <tr>

                        <th class="px-6 py-5 text-left text-sm font-semibold text-gray-500">
                            Judul Surat
                        </th>

                        <th class="px-6 py-5 text-left text-sm font-semibold text-gray-500">
                            Pengirim
                        </th>

                        <th class="px-6 py-5 text-left text-sm font-semibold text-gray-500">
                            Status
                        </th>

                        <th class="px-6 py-5 text-left text-sm font-semibold text-gray-500">
                            File
                        </th>

                        <th class="px-6 py-5 text-center text-sm font-semibold text-gray-500">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <!-- BODY -->
                <tbody>

                    @forelse($surats as $surat)

                    <tr class="border-b hover:bg-gray-50 transition">

                        <!-- JUDUL -->
                        <td class="px-6 py-5">

                            <div>

                                <h3 class="font-semibold text-[#041C64]">
                                    {{ $surat->judul }}
                                </h3>

                                <p class="text-sm text-gray-500 mt-1">
                                    {{ $surat->created_at->format('d M Y') }}
                                </p>

                            </div>

                        </td>

                        <!-- PENGIRIM -->
<!-- PENGIRIM -->
<td class="px-6 py-5">

    <div>

        <h4 class="font-semibold text-[#041C64]">
            {{ $surat->user->name ?? 'ORMAWA' }}
        </h4>

        <p class="text-sm text-gray-500 mt-1">
            Organisasi Mahasiswa
        </p>

    </div>

</td>

                        <!-- STATUS -->
                        <td class="px-6 py-5">

                            @if($surat->status == 'pending')

                                <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-xs font-semibold">

                                    Pending

                                </span>

                            @elseif($surat->status == 'disetujui')

                                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                                    Disetujui

                                </span>

                            @else

                                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-xs font-semibold">

                                    Ditolak

                                </span>

                            @endif

                        </td>

                        <!-- FILE -->
                        <td class="px-6 py-5">

                            @if($surat->file)

                                <a href="{{ asset('storage/surat/' . $surat->file) }}"
                                   target="_blank"
                                   class="inline-flex items-center gap-2 bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                    Lihat

                                </a>

                            @else

                                <span class="text-gray-400 text-sm">
                                    Tidak ada file
                                </span>

                            @endif

                        </td>

                        <!-- AKSI -->
                        <td class="px-6 py-5">

                            <div class="flex items-center justify-center gap-3">

                                @if($surat->status == 'pending')

                                <!-- ACC -->
                                <form action="{{ route('bemkm.surat.setujui', $surat->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('PUT')

                                    <button
                                        class="bg-green-100 hover:bg-green-200 text-green-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                        ACC

                                    </button>

                                </form>

                                <!-- TOLAK -->
                                <form action="{{ route('bemkm.surat.tolak', $surat->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('PUT')

                                    <button
                                        class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                        Tolak

                                    </button>

                                </form>

                                @else

                                <span class="text-gray-400 text-sm font-medium">
                                    Selesai
                                </span>

                                @endif

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5"
                            class="text-center py-16 text-gray-500">

                            Belum ada surat masuk

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection