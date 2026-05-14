@extends('superadmin.layouts.app')

@section('content')

<div class="max-w-7xl mx-auto">

    <!-- HEADER -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-8">

        <div>

            <h1 class="text-3xl font-bold text-[#041C64]">
                Detail Aspirasi
            </h1>

            <p class="text-gray-500 mt-2">
                Kelola aspirasi mahasiswa dan lakukan tindak lanjut secara profesional.
            </p>

        </div>

        <!-- BUTTON KEMBALI -->
        <a href="{{ route('superadmin.aspirasi.index') }}"
           class="inline-flex items-center justify-center px-6 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold duration-200">

            ← Kembali ke Dashboard Aspirasi

        </a>

    </div>



    <!-- CARD -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

        <!-- TOP -->
        <div class="p-8 border-b border-gray-100">

            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">

                <!-- INFORMASI -->
                <div>

                    <h2 class="text-2xl font-bold text-[#041C64] mb-6">
                        Informasi Mahasiswa
                    </h2>

                    <div class="space-y-4">

                        <!-- NAMA -->
                        <div class="flex items-center gap-4">

                            <span class="text-sm font-semibold text-gray-500 w-32">
                                Nama
                            </span>

                            <span class="text-gray-700 font-semibold">
                                {{ $aspirasi->nama }}
                            </span>

                        </div>



                        <!-- NIM -->
                        <div class="flex items-center gap-4">

                            <span class="text-sm font-semibold text-gray-500 w-32">
                                NIM
                            </span>

                            <span class="bg-gray-100 text-gray-700 px-4 py-2 rounded-xl text-sm font-semibold">
                                {{ $aspirasi->nim }}
                            </span>

                        </div>



                        <!-- KATEGORI -->
                        <div class="flex items-center gap-4">

                            <span class="text-sm font-semibold text-gray-500 w-32">
                                Kategori
                            </span>

                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-xs font-semibold">
                                {{ $aspirasi->kategori }}
                            </span>

                        </div>



                        <!-- TANGGAL -->
                        <div class="flex items-center gap-4">

                            <span class="text-sm font-semibold text-gray-500 w-32">
                                Tanggal
                            </span>

                            <span class="text-gray-700">
                                {{ $aspirasi->created_at->format('d M Y H:i') }}
                            </span>

                        </div>

                    </div>

                </div>



                <!-- STATUS -->
                <div>

                    @if($aspirasi->status == 'Menunggu')

                        <span class="bg-yellow-100 text-yellow-700 px-5 py-3 rounded-2xl text-sm font-bold">
                            {{ $aspirasi->status }}
                        </span>

                    @elseif($aspirasi->status == 'Diproses')

                        <span class="bg-blue-100 text-blue-700 px-5 py-3 rounded-2xl text-sm font-bold">
                            {{ $aspirasi->status }}
                        </span>

                    @elseif($aspirasi->status == 'Selesai')

                        <span class="bg-green-100 text-green-700 px-5 py-3 rounded-2xl text-sm font-bold">
                            {{ $aspirasi->status }}
                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-5 py-3 rounded-2xl text-sm font-bold">
                            {{ $aspirasi->status }}
                        </span>

                    @endif

                </div>

            </div>

        </div>



        <!-- ISI ASPIRASI -->
        <div class="p-8 border-b border-gray-100">

            <h3 class="text-xl font-bold text-[#041C64] mb-5">
                Isi Aspirasi
            </h3>

            <div class="bg-gray-50 border border-gray-100 rounded-3xl p-6 leading-relaxed text-gray-700 whitespace-pre-line">

                {{ $aspirasi->isi_aspirasi }}

            </div>

        </div>



        <!-- FORM UPDATE -->
        <div class="p-8">

            <h3 class="text-xl font-bold text-[#041C64] mb-6">
                Tindak Lanjut Aspirasi
            </h3>

            <form
                action="{{ route('superadmin.aspirasi.update', $aspirasi->id) }}"
                method="POST"
                class="space-y-6">

                @csrf
                @method('PUT')



                <!-- STATUS -->
                <div>

                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        Status Aspirasi
                    </label>

                    <select
                        name="status"
                        class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-500">

                        <option value="Menunggu"
                            {{ $aspirasi->status == 'Menunggu' ? 'selected' : '' }}>
                            Menunggu
                        </option>

                        <option value="Diproses"
                            {{ $aspirasi->status == 'Diproses' ? 'selected' : '' }}>
                            Diproses
                        </option>

                        <option value="Selesai"
                            {{ $aspirasi->status == 'Selesai' ? 'selected' : '' }}>
                            Selesai
                        </option>

                        <option value="Ditolak"
                            {{ $aspirasi->status == 'Ditolak' ? 'selected' : '' }}>
                            Ditolak
                        </option>

                    </select>

                </div>



                
                <!-- BUTTON -->
                <div class="flex flex-col lg:flex-row gap-4 pt-4">

                    <!-- SIMPAN -->
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center px-6 py-4 rounded-2xl bg-[#041C64] hover:bg-blue-900 text-white font-semibold duration-200 shadow-sm">

                        Simpan Perubahan

                    </button>



                    <!-- KEMBALI -->
                    <a href="{{ route('superadmin.aspirasi.index') }}"
                       class="inline-flex items-center justify-center px-6 py-4 rounded-2xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold duration-200">

                        Kembali

                    </a>

                </div>

            </form>



            <!-- DELETE -->
            <div class="mt-10 pt-8 border-t border-gray-100">

                <form
                    action="{{ route('superadmin.aspirasi.destroy', $aspirasi->id) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        onclick="return confirm('Yakin ingin menghapus aspirasi ini?')"
                        class="inline-flex items-center justify-center px-6 py-4 rounded-2xl bg-red-500 hover:bg-red-600 text-white font-semibold duration-200 shadow-sm">

                        Hapus Aspirasi

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection