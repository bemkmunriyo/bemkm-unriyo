@extends('ormawaukm.layouts.app')

@section('content')

<div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">

    <h1 class="text-3xl font-bold text-[#041C64] mb-8">
        Ajukan Surat Kegiatan
    </h1>

    <form action="{{ route('ormawaukm.surat.store') }}"
      method="POST"
      enctype="multipart/form-data">

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Nama Kegiatan
                </label>

                <input type="text"
                    name="judul"
                    placeholder="Nama Kegiatan"
                    class="w-full border rounded-2xl px-5 py-3 mb-4">
            </div>

            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Jenis Surat
                </label>

                <select name="jenis_surat"
                        class="w-full border border-gray-300 rounded-2xl px-5 py-3">

                    <option value="Surat Izin Kegiatan">
                        Surat Izin Kegiatan
                    </option>

                    <option value="Surat Peminjaman">
                        Surat Peminjaman
                    </option>

                    <option value="Surat Permohonan">
                        Surat Permohonan
                    </option>

                </select>
            </div>

            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Tempat
                </label>

                <input type="text"
                       name="tempat"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-3">
            </div>

            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Tanggal Kegiatan
                </label>

                <input type="date"
                       name="tanggal_kegiatan"
                       class="w-full border border-gray-300 rounded-2xl px-5 py-3">
            </div>

        </div>

        <div class="mt-6">

            <label class="block mb-2 font-medium text-gray-700">
                Deskripsi Kegiatan
            </label>

            <textarea name="deskripsi"
                      rows="5"
                      class="w-full border border-gray-300 rounded-2xl px-5 py-3"></textarea>

        </div>
<div class="mt-6">

    <label class="block mb-2 font-medium text-gray-700">
        Upload Surat / Proposal
    </label>

    <input type="file"
           name="file"
           class="w-full border border-gray-300 rounded-2xl px-5 py-3">

    <p class="text-sm text-gray-500 mt-2">
        Format: PDF, DOC, DOCX
    </p>

</div>
        <div class="mt-8">

            <button
                class="bg-[#1A46D3] hover:bg-[#1238B3] text-white px-8 py-4 rounded-2xl font-semibold">

                Kirim Surat

            </button>

        </div>

    </form>

</div>

@endsection