<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KaryawanController2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/




Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/blogmalasngoding', function () {
	return view('blogmalasngoding');
});

Route::get('/Bootstrap1', function () {
	return view('Bootstrap1');
});

Route::get('/js1', function () {
	return view('js1');
});

Route::get('/js2', function () {
	return view('js2');
});

Route::get('/latihanbootstrap', function () {
	return view('latihanbootstrap');
});

Route::get('/pertama', function () {
	return view('pertama');
});

Route::get('/linktree', function () {
	return view('linktree');
});

Route::get('/template', function () {
	return view('template');
});

Route::get('dosen', [Controller::class, 'index']);

//formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//CRUD
Route::get('/pegawai', [PegawaiController::class,'index']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit']);
Route::post('/pegawai/update',[PegawaiController::class,'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class,'cari']);

//tugas CRUD Monitor
Route::resource('monitor', MonitorController::class);

//CRUD Karyawan
Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/karyawan/tambah', [KaryawanController::class,'tambah']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/edit/{kodepegawai}', [KaryawanController::class,'edit']);
Route::post('/karyawan/update',[KaryawanController::class,'update']);
Route::get('/karyawan/hapus/{kodepegawai}', [KaryawanController::class,'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class,'cari']);

//CRUD KeranjangBelanja

use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/create', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');
Route::get('/keranjang/cari', [KeranjangBelanjaController::class, 'cari'])->name('keranjang.cari');

// Week 15 EAS exercise Laki-laki NRP Genap
Route::get('/karyawan2', [KaryawanController2::class, 'index']);
Route::get('/karyawan2/tambah', [KaryawanController2::class, 'tambah']);
Route::post('/karyawan2/store', [KaryawanController2::class, 'store']);
Route::get('/karyawan2/hapus/{id}', [KaryawanController2::class, 'hapus']);
