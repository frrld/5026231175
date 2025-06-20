<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
	{
        $nilai = DB::table('nilai')->get();


		return view('indexEAS', ['nilai' => $nilai]);

	}


	public function tambah()
	{

		// memanggil view tambah
		return view('tambahdataEAS');

	}


	public function store(Request $request)
	{
		// insert data ke table
		DB::table('nilai')->insert([
			'id' => $request->id,
			'normorinduksiswa' => $request->normorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks,
		]);
		// alihkan halaman ke halaman
		return redirect('/nilai');

	}
}
