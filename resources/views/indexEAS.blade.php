@extends('template')
@section('content')
    <h3>Nilai Mahasiswa</h3>

    <a href="/nilai/tambah" class="btn btn-primary">Tambah Data</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor Induk Siswa</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->normorinduksiswa }}</td>
                    <td>{{ $n->nilaiangka }}</td>
                    <td>{{ $n->sks }}</td>
                    <td>
                        @if ($n->nilaiangka < 81) 'A'
                        @elseif ($n->nilaiangka >= 61) 'B'
                        @elseif ($n->nilaiangka >= 41) 'c'
                        @else 'D'
                        @endif
                        </td>
                    <td>{{ $n->nilaiangka * $n->sks}}</td>
                </tr>

            @endforeach

        </tbody>
    </table>
@endsection
