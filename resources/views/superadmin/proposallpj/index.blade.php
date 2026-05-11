@extends('superadmin.layouts.app')

@section('content')

<div class="mb-8">

    <h1 class="text-3xl font-bold text-[#041C64]">
        Proposal & LPJ
    </h1>

    <p class="text-gray-500 mt-2">
        Monitoring seluruh proposal dan LPJ organisasi mahasiswa.
    </p>

</div>

<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

    <div class="px-6 py-5 border-b border-gray-100">

        <h2 class="text-2xl font-bold text-[#041C64]">
            Data Proposal & LPJ
        </h2>

    </div>

    <div class="overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Organisasi
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Jenis
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Kegiatan
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-500">
                        Status
                    </th>

                    <th class="px-6 py-4 text-center text-sm font-semibold text-gray-500">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                <tr class="border-t hover:bg-gray-50">

                    <td class="px-6 py-5">
                        HIMA TI
                    </td>

                    <td class="px-6 py-5">
                        Proposal
                    </td>

                    <td class="px-6 py-5">
                        Seminar AI
                    </td>

                    <td class="px-6 py-5">

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-xs font-semibold">

                            Disetujui

                        </span>

                    </td>

                    <td class="px-6 py-5 text-center">

                        <button
                        class="bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold">

                            Detail

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection