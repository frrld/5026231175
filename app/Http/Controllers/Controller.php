<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $nama = "Muhammad Farrel Danendra";
        $umur = 19;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata', [
        'nama'   => $nama,
        'umur'   => $umur,
        'alamat' => $alamat,
        'matkul' => $pelajaran
    ]);
    }
}


