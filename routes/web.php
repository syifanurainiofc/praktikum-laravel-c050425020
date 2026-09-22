<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', function () {
    return 'Ini halaman artikel baru';
});

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all(); 
    return view('mahasiswa.index', compact('data'));
});

Route::get('/matakuliah', function () {
    $data = Matakuliah::all(); 
    return view('matakuliah.index', compact('data'));
});

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);

Route::post('/matakuliah/store', [MatakuliahController::class, 'store']);