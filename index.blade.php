@extends('layouts.app')
@section('title', 'Data Mobil')
@section('content')
<div class="card">
    <h1>Daftar Data Mobil</h1>
    <p>Berikut merupakan data mobil yang tersedia dalam sistem rental.</p>
    <a class="btn green" href="{{ route('cars.create') }}">+ Tambah Mobil</a>
</div>
<div class="card">
@if($cars->isEmpty())
    <p>Belum ada data</p>
@else
<table>
    <thead><tr><th>No</th><th>Mobil</th><th>Plat Nomor</th><th>Tahun</th><th>Tarif/Hari</th><th>Status</th><th>Aksi</th></tr></thead>
    <tbody>
    @foreach($cars as $car)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $car->brand }} {{ $car->model }}</td>
        <td>{{ $car->plate_number }}</td>
        <td>{{ $car->year }}</td>
        <td>Rp{{ number_format($car->daily_rate,0,',','.') }}</td>
        <td>{{ $car->is_available ? 'Tersedia' : 'Tidak tersedia' }}</td>
        <td><div class="actions">
            <a class="btn gray" href="{{ route('cars.show',$car) }}">Detail</a>
            <a class="btn" href="{{ route('cars.edit',$car) }}">Ubah</a>
            <form action="{{ route('cars.destroy',$car) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data mobil ini?')">
                @csrf @method('DELETE')
                <button class="btn red" type="submit">Hapus</button>
            </form>
        </div></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endif
</div>
@endsection
