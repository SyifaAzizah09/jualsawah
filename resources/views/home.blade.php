<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Tugas Public</title>
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-pink-100 min-h-screen flex flex-col items-center justify-center p-10">

    <h1 class="text-4xl font-bold text-pink-700 mb-8 drop-shadow-md">
        Ini Adalah Halaman Tugas Public
    </h1>

    <div class="flex flex-col md:flex-row gap-6">
        <img src="{{ asset('images/sego.jpg') }}" alt="menu 1" class="w-72 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('images/seblak.jpg') }}" alt="menu 2" class="w-72 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
    </div>

</body>
</html>