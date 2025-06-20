@extends('template')

@section('content')
    <h3>Tambah Data Nilai Mahasiswa</h3>

    <a href="/nilai" class="btn btn-info mb-3">Kembali</a>

    <form action="/nilai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="normorinduksiswa" class="col-sm-2 col-form-label">Nomor Induk Mahasiswa</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="normorinduksiswa" name="normorinduksiswa" placeholder="Nomor Induk Mahasiswa" maxlength="5" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nilaiangka" name="nilaiangka" placeholder="Nilai (Angka)" maxlength="3" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="sks" name="sks" placeholder="SKS (Angka)" maxlength="1" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
