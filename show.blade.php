@extends('layouts.app')
@section('title', 'Detail Mobil')
@section('content')
<div class="card">
<h1>Detail Data Mobil</h1>
<table>
@foreach([
    'Merek' => $car->brand, 'Model' => $car->model, 'Nomor Polisi' => $car->plate_number,
    'Tahun' => $car->year, 'Tarif per Hari' => 'Rp'.number_format($car->daily_rate,0,',','.'),
    'Tanggal Servis Terakhir' => $car->last_service_at->format('d-m-Y'),
    'Ketersediaan' => $car->is_available ? 'Tersedia' : 'Tidak tersedia',
    'Catatan' => $car->notes ?: '-', 'Warna' => $car->color ?: '-',
] as $label => $value)
<tr><th>{{ $label }}</th><td>{{ $value }}</td></tr>
@endforeach
</table>
<br>
<a class="btn" href="{{ route('cars.edit',$car) }}">Ubah</a>
<a class="btn gray" href="{{ route('cars.index') }}">Kembali ke Daftar</a>
<form style="display:inline" action="{{ route('cars.destroy',$car) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data mobil ini?')">
@csrf @method('DELETE') <button class="btn red" type="submit">Hapus</button>
</form>
</div>
@endsection
