@extends('superadmin.layouts.app')

@section('content')

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold text-[#041C64] mb-8">
        Tambah Akun
    </h1>

    <form action="{{ route('superadmin.akun.store') }}"
          method="POST"
          class="bg-white rounded-3xl p-8 shadow-sm space-y-6">

        @csrf

        <!-- NAMA -->
        <div>

            <label class="block font-semibold mb-3">
                Nama Organisasi
            </label>

            <input type="text"
                   name="name"
                   required
                   class="w-full border rounded-2xl px-5 py-4">

        </div>

        <!-- USERNAME -->
        <div>

            <label class="block font-semibold mb-3">
                Username
            </label>

            <input type="text"
                   name="username"
                   required
                   class="w-full border rounded-2xl px-5 py-4">

        </div>

        <!-- EMAIL -->
        <div>

            <label class="block font-semibold mb-3">
                Email
            </label>

            <input type="email"
                   name="email"
                   required
                   class="w-full border rounded-2xl px-5 py-4">

        </div>

        <!-- PASSWORD -->
        <div>

            <label class="block font-semibold mb-3">
                Password
            </label>

            <input type="password"
                   name="password"
                   required
                   class="w-full border rounded-2xl px-5 py-4">

        </div>

        <!-- ROLE -->
        <div>

            <label class="block font-semibold mb-3">
                Role
            </label>

            <select name="role"
                    class="w-full border rounded-2xl px-5 py-4">

                <option value="bem">
                    BEM KM
                </option>

                <option value="dpm">
                    DPM KM
                </option>

                <option value="ormawa">
                    ORMAWA
                </option>

                <option value="ukm">
                    UKM
                </option>

            </select>

        </div>

        <!-- BUTTON -->
        <button
            class="bg-[#041C64] hover:bg-[#02113D]
            text-white px-6 py-4 rounded-2xl font-semibold">

            Simpan Akun

        </button>

    </form>

</div>

@endsection
