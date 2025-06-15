@extends('template')

@section('content')
    <h3>Tambah Data Karyawan</h3>

    <a href="/karyawan2" class="btn btn-info mb-3">Kembali</a>

    <form action="/karyawan2/store" method="post" class="form-horizontal"> <!-- Changed action to /karyawan2/store -->
        {{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" placeholder="Kode Pegawai (5 karakter)" maxlength="5" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap" maxlength="50" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi (5 karakter)" maxlength="5" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Departemen (max 10 karakter)" maxlength="10" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
