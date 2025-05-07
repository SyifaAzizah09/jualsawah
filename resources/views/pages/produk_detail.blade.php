@extends('layout.app')

@section('title', 'Detail Produk')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/Welcome_to_Batam.jpg" class="w-full h-64 object-cover rounded mb-4" alt="Ikan">
    <h1 class="text-2xl font-bold text-gray-800 mb-2">Ikan Cupang Super Red</h1>
    <p class="text-gray-700 mb-4">Ikan Cupang jenis Super Red berkualitas tinggi, cocok untuk kontes dan koleksi.</p>
    <p class="text-lg font-semibold text-blue-600 mb-4">Rp 25.000</p>
    <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Beli Sekarang</button>
</div>
@endsection
