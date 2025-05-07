@extends('layout.app')

@section('title', 'Kontak Kami')

@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-4">Hubungi Kami</h1>
<form class="space-y-4">
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Nama</label>
        <input type="text" class="w-full border-gray-300 rounded-lg shadow-sm" placeholder="Nama Anda">
    </div>
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
        <input type="email" class="w-full border-gray-300 rounded-lg shadow-sm" placeholder="email@example.com">
    </div>
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Pesan</label>
        <textarea class="w-full border-gray-300 rounded-lg shadow-sm" rows="4" placeholder="Tulis pesan Anda..."></textarea>
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kirim</button>
</form>
@endsection
