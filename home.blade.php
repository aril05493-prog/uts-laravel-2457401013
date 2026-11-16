@extends('layouts.app')
@section('title', 'Beranda - Rental Mobil Aril')
@section('content')
<div class="card">
    <h1>Rental Mobil Aril</h1>
    <p>Aplikasi berbasis web untuk mengelola data kendaraan dan ketersediaan mobil rental secara sederhana.</p>
    <p><strong>Total mobil terdaftar:</strong> {{ $totalCars }}</p>
    <a class="btn" href="{{ route('cars.index') }}">Lihat Daftar Mobil</a>
</div>
@endsection
