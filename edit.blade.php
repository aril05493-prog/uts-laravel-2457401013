@extends('layouts.app')
@section('title', 'Ubah Mobil')
@section('content')
<div class="card">
<h1>Ubah Data Mobil</h1>
<form action="{{ route('cars.update',$car) }}" method="POST">
@csrf @method('PUT')
<div class="grid">
<div>
<label>Merek Mobil</label>
<select name="brand">
<option value="">-- Pilih Merek --</option>
@foreach($brands as $brand)
<option value="{{ $brand }}" @selected(old('brand', $car->brand ?? '') == $brand)>{{ $brand }}</option>
@endforeach
</select>
@error('brand')<div class="error">{{ $message }}</div>@enderror
</div>
<div>
<label>Model Mobil</label>
<input name="model" value="{{ old('model', $car->model ?? '') }}">
@error('model')<div class="error">{{ $message }}</div>@enderror
</div>
<div>
<label>Nomor Polisi</label>
<input name="plate_number" value="{{ old('plate_number', $car->plate_number ?? '') }}">
@error('plate_number')<div class="error">{{ $message }}</div>@enderror
</div>
<div>
<label>Tahun</label>
<input type="number" name="year" value="{{ old('year', $car->year ?? '') }}">
@error('year')<div class="error">{{ $message }}</div>@enderror
</div>
<div>
<label>Tarif Sewa per Hari (Rp)</label>
<input type="number" step="0.01" name="daily_rate" value="{{ old('daily_rate', $car->daily_rate ?? '') }}">
@error('daily_rate')<div class="error">{{ $message }}</div>@enderror
</div>
<div>
<label>Tanggal Servis Terakhir</label>
<input type="date" name="last_service_at" value="{{ old('last_service_at', isset($car) ? $car->last_service_at->format('Y-m-d') : '') }}">
@error('last_service_at')<div class="error">{{ $message }}</div>@enderror
</div>
<div>
<label>Warna Mobil (kolom tambahan)</label>
<input name="color" value="{{ old('color', $car->color ?? '') }}">
@error('color')<div class="error">{{ $message }}</div>@enderror
</div>
<div>
<label>Catatan</label>
<textarea name="notes" rows="3">{{ old('notes', $car->notes ?? '') }}</textarea>
@error('notes')<div class="error">{{ $message }}</div>@enderror
</div>
</div>
<label><input type="checkbox" name="is_available" value="1" @checked(old('is_available', $car->is_available ?? true))> Mobil tersedia untuk disewa</label>
@error('is_available')<div class="error">{{ $message }}</div>@enderror

<br><button class="btn green" type="submit">Simpan Perubahan</button>
<a class="btn gray" href="{{ route('cars.index') }}">Kembali</a>
</form>
</div>
@endsection
