@extends('template')

@section('content')
    <h1 class="mb-4">Tambah Keranjang Belanja</h1>

    <!-- Menampilkan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger" style="padding: 10px 15px; margin-bottom: 10px; font-size: 14px; line-height: 1.4;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('keranjang.store') }}" method="POST" class="w-50" onsubmit="return calculateTotal();">
        @csrf
        <!-- Input Kode Barang -->
        <div class="mb-3">
            <label for="kode_barang" class="form-label">Kode Barang</label>
            <input type="number" name="kode_barang" id="kode_barang" class="form-control" placeholder="Masukkan Kode Barang" required value="{{ old('kode_barang') }}">
        </div>

        <!-- Input Jumlah Pembelian -->
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Pembelian</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Jumlah" required value="{{ old('jumlah') }}">
        </div>

        <!-- Input Harga per Item -->
        <div class="mb-3">
            <label for="harga" class="form-label">Harga per Item</label>
            <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" required value="{{ old('harga') }}">
        </div>

        <!-- Input Total (otomatis) -->
        <div class="mb-3">
            <label for="total" class="form-label">Total Harga</label>
            <input type="text" id="total" class="form-control" readonly>
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('keranjang.index') }}" class="btn btn-secondary ml-2">Kembali</a>
    </form>

    <!-- JavaScript untuk menghitung total harga -->
    <script>
        // Fungsi untuk menghitung total
        function calculateTotal() {
            let jumlah = document.getElementById('jumlah').value;
            let harga = document.getElementById('harga').value;
            let total = jumlah * harga;
            document.getElementById('total').value = total.toLocaleString();
            return true; // Pastikan form bisa terkirim setelah perhitungan
        }

        // Event listener untuk menghitung otomatis saat jumlah atau harga berubah
        document.getElementById('jumlah').addEventListener('input', calculateTotal);
        document.getElementById('harga').addEventListener('input', calculateTotal);
    </script>
@endsection
