@extends('template')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Monitor</h1>

    <form method="GET" action="{{ route('monitor.index') }}" class="mb-3">
      <div class="input-group">
        <input
          type="text"
          name="search"
          class="form-control"
          placeholder="Cari merk, harga, tersedia, atau berat…"
          value="{{ old('search', $search) }}"
        >
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
      </div>
    </form>

    <a href="{{ route('monitor.create') }}" class="btn btn-primary mb-3">+ Tambah Monitor</a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Merk</th>
          <th>Harga (Rp)</th>
          <th>Tersedia</th>
          <th>Berat (kg)</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($monitors as $m)
        <tr>
          <td>{{ $m->ID }}</td>
          <td>{{ $m->merkmonitor }}</td>
          <td>{{ number_format($m->hargamonitor,0,',','.') }}</td>
          <td>{{ $m->tersedia ? 'Ya' : 'Tidak' }}</td>
          <td>{{ $m->berat }}</td>
          <td>
            <a href="{{ route('monitor.show', $m->ID) }}" class="btn btn-info btn-sm">Lihat</a>
            <a href="{{ route('monitor.edit', $m->ID) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('monitor.destroy', $m->ID) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
              @csrf @method('DELETE')
              <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center">Belum ada data monitor.</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    <div class="mt-4">
      {{ $monitors->links() }}
    </div>
</div>
@endsection
