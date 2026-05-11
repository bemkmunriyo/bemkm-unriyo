@extends('superadmin.layouts.app')

@section('content')

<div class="p-8">

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-4xl font-black text-[#041C64]">
                Manajemen Akun
            </h1>

            <p class="text-gray-500 mt-2">
                Kelola akun organisasi mahasiswa
            </p>

        </div>

        <!-- BUTTON -->
        <a href="{{ route('superadmin.akun.create') }}"
           class="bg-[#041C64] hover:bg-[#02113D]
           text-white px-6 py-4 rounded-2xl font-semibold shadow-lg">

            + Tambah Akun

        </a>

    </div>

    <!-- TABLE -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-slate-200">

        <div class="overflow-x-auto">

            <table class="w-full">

                <!-- HEAD -->
                <thead class="bg-slate-50">

                    <tr>

                        <th class="px-6 py-5 text-left font-bold text-slate-700">
                            Nama Organisasi
                        </th>

                        <th class="px-6 py-5 text-left font-bold text-slate-700">
                            Username
                        </th>

                        <th class="px-6 py-5 text-left font-bold text-slate-700">
                            Role
                        </th>

                        <th class="px-6 py-5 text-left font-bold text-slate-700">
                            Status
                        </th>

                        <th class="px-6 py-5 text-center font-bold text-slate-700">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <!-- BODY -->
                <tbody>

                    @forelse($users as $user)

                    <tr class="border-t border-slate-100 hover:bg-slate-50">

                        <!-- NAMA -->
                        <td class="px-6 py-5 font-semibold text-slate-800">

                            {{ $user->name }}

                        </td>

                        <!-- USERNAME -->
                        <td class="px-6 py-5 text-slate-600">

                            {{ $user->username }}

                        </td>

                        <!-- ROLE -->
                        <td class="px-6 py-5">

                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold">

                                {{ strtoupper($user->role) }}

                            </span>

                        </td>

                        <!-- STATUS -->
                        <td class="px-6 py-5">

                            @if($user->status == 'aktif')

                                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-xl text-sm font-semibold">

                                    Aktif

                                </span>

                            @else

                                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-xl text-sm font-semibold">

                                    Nonaktif

                                </span>

                            @endif

                        </td>

                        <!-- AKSI -->
                        <td class="px-6 py-5">

                            <div class="flex justify-center gap-3">

                                <!-- EDIT -->
                                <a href="{{ route('superadmin.akun.edit', $user->id) }}"
                                   class="bg-yellow-100 hover:bg-yellow-200
                                   text-yellow-700 px-4 py-2 rounded-xl font-semibold">

                                    Edit

                                </a>

                                <!-- DELETE -->
                                <form action="{{ route('superadmin.akun.destroy', $user->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Hapus akun ini?')"
                                        class="bg-red-100 hover:bg-red-200
                                        text-red-700 px-4 py-2 rounded-xl font-semibold">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5"
                            class="text-center py-10 text-slate-500">

                            Belum ada akun organisasi.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection