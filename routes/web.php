<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {
	return view('blog');
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

Route::get('/landingpage', function () {
    return view('landingpage');
});

