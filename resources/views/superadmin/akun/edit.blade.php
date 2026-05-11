@extends('superadmin.layouts.app')

@section('content')

<div class="max-w-3xl">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-[#041C64]">
            Edit Akun
        </h1>

        <p class="text-gray-500 mt-2">
            Update informasi akun organisasi
        </p>

    </div>

    <!-- FORM -->
    <form action="{{ route('akun.update', $user->id) }}"
          method="POST"
          class="bg-white rounded-3xl p-8 shadow-sm space-y-6">

        @csrf
        @method('PUT')

        <!-- NAMA -->
        <div>

            <label class="block font-semibold mb-3">
                Nama Organisasi
            </label>

            <input type="text"
                   name="name"
                   value="{{ $user->name }}"
                   required
                   class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 outline-none">

        </div>

        <!-- USERNAME -->
        <div>

            <label class="block font-semibold mb-3">
                Username
            </label>

            <input type="text"
                   name="username"
                   value="{{ $user->username }}"
                   required
                   class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 outline-none">

        </div>

        <!-- EMAIL -->
        <div>

            <label class="block font-semibold mb-3">
                Email
            </label>

            <input type="email"
                   name="email"
                   value="{{ $user->email }}"
                   required
                   class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 outline-none">

        </div>

        <!-- PASSWORD -->
        <div>

            <label class="block font-semibold mb-3">
                Password Baru
            </label>

            <input type="password"
                   name="password"
                   placeholder="Kosongkan jika tidak diubah"
                   class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 outline-none">

        </div>

        <!-- ROLE -->
        <div>

            <label class="block font-semibold mb-3">
                Role
            </label>

            <select name="role"
                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 outline-none">

                <option value="bem"
                    {{ $user->role == 'bem' ? 'selected' : '' }}>

                    BEM KM

                </option>

                <option value="dpm"
                    {{ $user->role == 'dpm' ? 'selected' : '' }}>

                    DPM KM

                </option>

                <option value="ormawa"
                    {{ $user->role == 'ormawa' ? 'selected' : '' }}>

                    ORMAWA

                </option>

                <option value="ukm"
                    {{ $user->role == 'ukm' ? 'selected' : '' }}>

                    UKM

                </option>

            </select>

        </div>

        <!-- STATUS -->
        <div>

            <label class="block font-semibold mb-3">
                Status Akun
            </label>

            <select name="status"
                    class="w-full border border-slate-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 outline-none">

                <option value="aktif"
                    {{ $user->status == 'aktif' ? 'selected' : '' }}>

                    Aktif

                </option>

                <option value="nonaktif"
                    {{ $user->status == 'nonaktif' ? 'selected' : '' }}>

                    Nonaktif

                </option>

            </select>

        </div>

        <!-- BUTTON -->
        <div class="flex gap-4">

            <button
                type="submit"
                class="bg-[#041C64] hover:bg-[#02113D]
                text-white px-6 py-4 rounded-2xl font-semibold">

                Update Akun

            </button>

            <a href="{{ route('superadmin.akun.index') }}"
               class="bg-slate-100 hover:bg-slate-200
               px-6 py-4 rounded-2xl font-semibold">

                Kembali

            </a>

        </div>

    </form>

</div>

@endsection