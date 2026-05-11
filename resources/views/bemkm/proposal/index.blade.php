@extends('bemkm.layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Proposal Organisasi
        </h1>

        <p class="text-gray-500 mt-2">
            Kelola proposal kegiatan organisasi mahasiswa dan unit kegiatan mahasiswa.
        </p>

    </div>

    <!-- BUTTON -->
    <div class="flex items-center gap-4">

        <a href="{{ route('bemkm.proposal.create') }}"
           class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-6 py-3 rounded-2xl font-semibold shadow-sm transition">

            + Upload Proposal

        </a>

    </div>

</div>

<!-- FILTER -->
<div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 mb-8">

    <form method="GET" action="{{ route('bemkm.proposal.index') }}">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

            <!-- SEARCH -->
            <div class="md:col-span-2">

                <label class="text-sm font-medium text-gray-600 mb-2 block">
                    Cari Proposal
                </label>

                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari nama kegiatan..."
                       class="w-full border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-blue-200">

            </div>

            <!-- STATUS -->
            <div>

                <label class="text-sm font-medium text-gray-600 mb-2 block">
                    Status
                </label>

                <select name="status"
                        class="w-full border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-blue-200">

                    <option value="">Semua Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Disetujui">Disetujui</option>
                    <option value="Ditolak">Ditolak</option>
                    <option value="Revisi">Revisi</option>

                </select>

            </div>

            <!-- BUTTON -->
            <div class="flex items-end">

                <button
                    type="submit"
                    class="w-full bg-[#041C64] hover:bg-[#02113D] text-white py-3 rounded-2xl font-semibold transition">

                    Filter Data

                </button>

            </div>

        </div>

    </form>

</div>

<!-- STATISTIK -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <!-- TOTAL -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Total Proposal
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-[#041C64]">
                {{ $totalProposal }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-[#EEF3FF] flex items-center justify-center text-2xl">
                📄
            </div>

        </div>

    </div>

    <!-- PENDING -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Menunggu ACC
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-yellow-500">
                {{ $pendingProposal }}
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
                {{ $approvedProposal }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                ✅
            </div>

        </div>

    </div>

    <!-- DITOLAK -->
    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

        <p class="text-sm text-gray-500">
            Revisi / Ditolak
        </p>

        <div class="flex justify-between items-center mt-4">

            <h2 class="text-4xl font-bold text-red-500">
                {{ $rejectedProposal }}
            </h2>

            <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center text-2xl">
                ❌
            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center">

        <div>

            <h2 class="text-2xl font-bold text-[#041C64]">
                Daftar Proposal
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Data proposal organisasi mahasiswa terbaru
            </p>

        </div>

    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Kegiatan
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Organisasi
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Nominal
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-500">
                        Tanggal
                    </th>

                    <th class="text-center px-6 py-4 text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($proposals as $proposal)

                <tr class="border-t hover:bg-gray-50 transition">

                    <td class="px-6 py-5">

                        <h3 class="font-semibold text-[#041C64]">
                            {{ $proposal->nama_kegiatan }}
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            {{ $proposal->deskripsi ?? 'Proposal kegiatan organisasi mahasiswa' }}
                        </p>

                    </td>

                    <td class="px-6 py-5 text-gray-600">
                        {{ $proposal->ormawa->name ?? '-' }}
                    </td>

                    <td class="px-6 py-5 font-semibold text-[#041C64]">
                        Rp {{ number_format($proposal->nominal, 0, ',', '.') }}
                    </td>

                    <td class="px-6 py-5">

                        <span class="px-4 py-2 rounded-full text-xs font-semibold
                            
                            @if($proposal->status == 'Pending')
                                bg-yellow-100 text-yellow-700
                            @elseif($proposal->status == 'Disetujui')
                                bg-green-100 text-green-700
                            @elseif($proposal->status == 'Revisi')
                                bg-blue-100 text-blue-700
                            @else
                                bg-red-100 text-red-700
                            @endif
                        ">

                            {{ $proposal->status }}

                        </span>

                    </td>

                    <td class="px-6 py-5 text-gray-500">
                        {{ $proposal->created_at->format('d M Y') }}
                    </td>

                    <td class="px-6 py-5">

                        <div class="flex items-center justify-center gap-3">

                            @if($proposal->status == 'Pending')

                                <form action="{{ route('bemkm.proposal.acc', $proposal->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button
                                        class="bg-green-100 hover:bg-green-200 text-green-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                        ACC

                                    </button>
                                </form>

                                <form action="{{ route('bemkm.proposal.revisi', $proposal->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button
                                        class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                        Revisi

                                    </button>
                                </form>

                                <form action="{{ route('bemkm.proposal.tolak', $proposal->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button
                                        class="bg-red-100 hover:bg-red-200 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold transition">

                                        Tolak

                                    </button>
                                </form>

                            @else

                                <button
                                    class="bg-gray-100 text-gray-500 px-4 py-2 rounded-xl text-sm font-semibold cursor-not-allowed">

                                    Selesai

                                </button>

                            @endif

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center py-10 text-gray-500">

                        Belum ada proposal masuk

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection