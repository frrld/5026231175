<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Menampilkan seluruh data keranjang belanja
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->paginate(10);
        return view('index4', ['keranjang' => $keranjang]);
    }

    // Menampilkan halaman tambah data
    public function create()
    {
        return view('tambahdata');
    }

    // Menyimpan data keranjang belanja
    public function store(Request $request)
    {
        // Validasi apakah kode_barang sudah ada
        $request->validate([
            'kode_barang' => 'required|integer|unique:keranjangbelanja,kode_barang',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer',
        ], [
            'kode_barang.unique' => 'Kode barang sudah ada. Pilih kode barang lain.',
        ]);

        // Menyimpan data ke tabel keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'kode_barang' => $request->kode_barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);

        return redirect('/keranjang');
    }

    // Menghapus data keranjang belanja
    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect('/keranjang');
    }

    // Mencari data berdasarkan kode_barang
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $keranjang = DB::table('keranjangbelanja')->where('kode_barang', 'like', "%".$cari."%")->paginate();
        return view('index4', ['keranjang' => $keranjang, 'cari' => $cari]);
    }
}
