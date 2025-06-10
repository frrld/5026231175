@extends('template')

@section('content')
<div class="container">
    <h1>Detail Monitor</h1>
    <table class="table">
      <tr><th>ID</th><td>{{ $monitor->ID }}</td></tr>
      <tr><th>Merk</th><td>{{ $monitor->merkmonitor }}</td></tr>
      <tr><th>Harga</th><td>Rp {{ number_format($monitor->hargamonitor,0,',','.') }}</td></tr>
      <tr><th>Tersedia</th><td>{{ $monitor->tersedia ? 'Ya' : 'Tidak' }}</td></tr>
      <tr><th>Berat</th><td>{{ $monitor->berat }} kg</td></tr>
    </table>
    <a href="{{ route('monitor.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
