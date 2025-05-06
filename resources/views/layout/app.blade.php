<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>

    {{-- Load Tailwind + Flowbite (build dari app.css) --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Jika butuh font atau ikon --}}
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    {{-- Optional: Navbar atau Header --}}
    <header class="bg-white shadow p-4 mb-6">
        <h1 class="text-xl font-bold">@yield('page_title', 'Dashboard')</h1>
    </header>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    {{-- Optional: Footer --}}
    <footer class="text-center text-sm text-gray-500 mt-10 mb-4">
        &copy; {{ date('Y') }} Aplikasi Laravel. All rights reserved.
    </footer>

    {{-- Load Flowbite JS --}}
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

    {{-- Jika pakai Alpine.js atau tambahan lain --}}
    {{-- <script src="https://unpkg.com/alpinejs" defer></script> --}}
</body>
</html>
