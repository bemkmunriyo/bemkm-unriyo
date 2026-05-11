<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Sistem Organisasi</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        body{
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #041C64 0%, #00113D 100%);
        }

    </style>

</head>

<body class="min-h-screen flex items-center justify-center px-6">

    <!-- CARD -->
    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-10">

        <!-- HEADER -->
        <div class="text-center mb-8">

            <div class="w-20 h-20 mx-auto rounded-3xl bg-[#041C64]
            flex items-center justify-center text-white text-4xl shadow-lg">

                🎓

            </div>

            <h1 class="text-3xl font-bold text-[#041C64] mt-6">
                Login Sistem
            </h1>

            <p class="text-gray-500 mt-2">
                Sistem Organisasi Mahasiswa
            </p>

        </div>

        <!-- ERROR -->
        @if ($errors->any())

            <div class="mb-5 bg-red-100 border border-red-200 text-red-700 px-4 py-3 rounded-2xl">

                Username atau password salah.

            </div>

        @endif

        <!-- FORM -->
        <form method="POST" action="{{ route('login') }}">

            @csrf

            <!-- USERNAME -->
<div>

    <label class="block text-sm font-semibold text-slate-700 mb-3">

        Username Organisasi

    </label>

    <input
        type="text"
        name="username"
        id="username"
        placeholder="Masukkan username"
        required
        autofocus
        autocomplete="username"
        class="w-full border border-slate-200 focus:border-blue-900 focus:ring-4 focus:ring-blue-100 rounded-2xl px-5 py-4 outline-none duration-300 bg-slate-50"
    >

</div>

            <!-- PASSWORD -->
            <div class="mb-6">

                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Password
                </label>

                <input type="password"
                       name="password"
                       required
                       class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-200">

            </div>

            <!-- BUTTON -->
            <button type="submit"
                    class="w-full bg-[#041C64] hover:bg-[#02113D]
                    text-white py-4 rounded-2xl font-semibold transition">

                Login

            </button>

        </form>

        <!-- FOOTER -->
        <div class="mt-8 text-center">

            <p class="text-sm text-gray-500">
                Universitas Respati Yogyakarta
            </p>

        </div>

    </div>

</body>
</html>