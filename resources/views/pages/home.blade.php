@extends('layout.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>
    <link rel="stylesheet" href="css/flowbite.min.css">

    <x-card 
        imgsrc="images/sego.jpg"
        title="Gonggong goreng Tepung mak Limah" 
        desc="Kuliner unik satu ini wajib dicoba untuk menguji ketahanan gigi." 
        buttonText="Lihat Selengkapnya" 
    />
@endsection
