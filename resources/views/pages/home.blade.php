@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat Datang Di Bloomify')

@section('content')
<h1 class="text-2x1 font-bold mb-4">Senang Bisa Bertemu Kembali</h1>
<p class="mb-4">Berikut adalah Produk Buket Bunga Kami</p>

@include('components.card', [
'imgsrc' => 'images/matahari1.jpeg',
'title' => 'Buket Bunga Matahari',
'desc' => 'Buket Bunga Matahari adalah lambangkan keceriaan yang memancarkan energi positif.'
])

@endsection