@extends('template')

@section('content')
    <h1 class="mb-4">Keranjang Belanja</h1>

    <!-- Tombol Beli -->
    <a href="{{ route('keranjang.create') }}" class="btn btn-success mb-3" style="font-size: 1rem;">+ Beli</a>

    <!-- Tabel Keranjang Belanja -->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">Kode Pembelian</th>
                <th class="text-center">Kode Barang</th>
                <th class="text-center">Jumlah Pembelian</th>
                <th class="text-center">Harga per item</th>
                <th class="text-center">Total Jumlah x Harga</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjang as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->kode_barang }}</td>
                    <td class="text-center">{{ $item->jumlah }}</td>
                    <td class="text-center">{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td class="text-center">{{ number_format($item->jumlah * $item->harga, 0, ',', '.') }}</td>
                    <td class="text-center">
                        <!-- Tombol Hapus (Batal) -->
                        <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    {{ $keranjang->links() }}
@endsection
