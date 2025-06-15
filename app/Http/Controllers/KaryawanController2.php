<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController2 extends Controller  // Changed class name to KaryawanController2
{
    // Method untuk menampilkan semua data karyawan
    public function index()
    {
        // Mengambil data dari table karyawan
        $karyawan2 = DB::table('karyawan2')->get();

        // Mengirim data karyawan ke view index
        return view('index5', ['karyawan2' => $karyawan2]); // Changed view name to index5
    }

    // Method untuk menampilkan view form tambah karyawan
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambah4'); // Changed view name to tambah4
    }

    // Method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // Insert data ke table karyawan
        DB::table('karyawan2')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // Alihkan halaman ke halaman karyawan
        return redirect('/karyawan2');
    }

    // Method untuk hapus data karyawan
    public function hapus($id)
    {
        // Menghapus data karyawan berdasarkan kodepegawai yang dipilih
        DB::table('karyawan2')->where('kodepegawai', $id)->delete();

        // Alihkan halaman ke halaman karyawan
        return redirect('/karyawan2');
    }
}
