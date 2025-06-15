@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <a href="/karyawan2/tambah" class="btn btn-primary">Tambah Data</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan2 as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    <td>{{ strtoupper($k->namalengkap) }}</td>
                    <td>{{ $k->divisi }}</td>
                    <td>{{ strtolower($k->departemen) }}</td>
                    <td>
                        <a href="/karyawan2/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus Data</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
