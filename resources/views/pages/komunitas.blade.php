@extends('layout.app')

@section('title', 'Komunitas')

@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-4">Komunitas Ikan Hias</h1>
<ul class="space-y-4">
    <li class="p-4 bg-white rounded shadow">
        <h2 class="text-lg font-semibold">Komunitas Cupang Indonesia</h2>
        <p class="text-gray-600">Anggota: 1.200 | Lokasi: Jakarta</p>
    </li>
    <li class="p-4 bg-white rounded shadow">
        <h2 class="text-lg font-semibold">Koi Lovers Nusantara</h2>
        <p class="text-gray-600">Anggota: 900 | Lokasi: Surabaya</p>
    </li>
</ul>
@endsection
