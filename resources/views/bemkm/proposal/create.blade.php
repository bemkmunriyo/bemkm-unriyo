@extends('bemkm.layouts.app')

@section('content')

<div class="max-w-5xl mx-auto space-y-8">

    <!-- HEADER -->
    <div>

        <h1 class="text-3xl font-bold text-[#041C64]">
            Upload Proposal BEM KM
        </h1>

        <p class="text-gray-500 mt-2">
            Ajukan proposal kegiatan untuk diverifikasi dan dipantau oleh DPM KM.
        </p>

    </div>

    <!-- ALERT -->
    @if ($errors->any())

    <div class="bg-red-100 border border-red-200 text-red-700 px-6 py-4 rounded-2xl">

        <ul class="list-disc pl-5 space-y-1">

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif

    <!-- FORM -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

        <form action="{{ route('bemkm.proposal.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- NAMA KEGIATAN -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama Kegiatan
                    </label>

                    <input type="text"
                           name="judul"
                           value="{{ old('judul') }}"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-3 focus:ring-2 focus:ring-blue-200 outline-none"
                           placeholder="Masukkan nama kegiatan">

                </div>

                

                <!-- TANGGAL -->
                <div>

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Tanggal Kegiatan
                    </label>

                    <input type="date"
                           name="waktu_pelaksanaan"
                           value="{{ old('waktu_pelaksanaan') }}"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-3 focus:ring-2 focus:ring-blue-200 outline-none">

                </div>

                <!-- NOMINAL -->
                <div>

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nominal Pengajuan
                    </label>

                    <input type="number"
                           name="nominal"
                           value="{{ old('nominal') }}"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-3 focus:ring-2 focus:ring-blue-200 outline-none"
                           placeholder="Contoh: 5000000">

                </div>

                

                <!-- DESKRIPSI -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Deskripsi Kegiatan
                    </label>

                    <textarea name="deskripsi"
                              rows="5"
                              class="w-full border border-gray-300 rounded-2xl px-5 py-3 focus:ring-2 focus:ring-blue-200 outline-none"
                              placeholder="Jelaskan kegiatan yang akan dilaksanakan">{{ old('deskripsi') }}</textarea>

                </div>

                <!-- FILE -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Upload Proposal
                    </label>

                    <input type="file"
                           name="file"
                           class="w-full border border-gray-300 rounded-2xl px-5 py-3">

                    <p class="text-sm text-gray-500 mt-2">
                        Format PDF, DOC, DOCX maksimal 2MB
                    </p>

                </div>

            </div>

            <!-- BUTTON -->
            <div class="flex justify-end gap-4 mt-8">

                <a href="{{ route('bemkm.proposal.index') }}"
                   class="px-6 py-3 rounded-2xl border border-gray-300 text-gray-600 hover:bg-gray-50 transition">

                    Kembali

                </a>

                <button type="submit"
                        class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-8 py-3 rounded-2xl font-semibold transition shadow-sm">

                    Upload Proposal

                </button>

            </div>

        </form>

    </div>

</div>

@endsection