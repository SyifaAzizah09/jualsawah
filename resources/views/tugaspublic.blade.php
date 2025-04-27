<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Tugas Public</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 min-h-screen flex flex-col items-center justify-center p-10">

    <!-- Notifikasi -->
    <div class="bg-red-500 text-white font-bold p-4 rounded mb-8 shadow-md">
        Tailwind Aktif - Ini Warna Merah
    </div>

    <!-- Judul Halaman -->
    <h1 class="text-4xl font-bold text-pink-700 mb-8 drop-shadow-md text-center">
        Ini Adalah Halaman Tugas Public
    </h1>

    <!-- Gambar Menu -->
    <div class="flex flex-col md:flex-row gap-6">
        <div class="bg-white p-4 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('images/teh.jpg') }}" alt="menu 1" class="w-72 rounded-xl">
        </div>
        <div class="bg-white p-4 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('images/ayam.jpg') }}" alt="menu 2" class="w-72 rounded-xl">
        </div>
    </div>

</body>
</html>
