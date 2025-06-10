@extends('template')

@section('content')
<div class="container">
    <h1>Edit Monitor</h1>
    <form action="{{ route('monitor.update', $monitor->ID) }}" method="POST">
      @csrf @method('PUT')
      <div class="form-group mb-3">
        <label>Merk Monitor</label>
        <input type="text" name="merkmonitor" class="form-control" value="{{ old('merkmonitor', $monitor->merkmonitor) }}">
        @error('merkmonitor')<small class="text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="form-group mb-3">
        <label>Harga Monitor</label>
        <input type="number" name="hargamonitor" class="form-control" value="{{ old('hargamonitor', $monitor->hargamonitor) }}">
        @error('hargamonitor')<small class="text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="form-group mb-3">
        <label>Tersedia</label>
        <select name="tersedia" class="form-control">
          <option value="1" {{ $monitor->tersedia ? 'selected' : '' }}>Ya</option>
          <option value="0" {{ !$monitor->tersedia ? 'selected' : '' }}>Tidak</option>
        </select>
        @error('tersedia')<small class="text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="form-group mb-3">
        <label>Berat (kg)</label>
        <input type="text" name="berat" class="form-control" value="{{ old('berat', $monitor->berat) }}">
        @error('berat')<small class="text-danger">{{ $message }}</small>@enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('monitor.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
