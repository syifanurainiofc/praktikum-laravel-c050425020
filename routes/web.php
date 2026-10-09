<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;

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




Route::get('/profil', function () {
    return 'Haloo, Selamat Datang di Profil Kami';
});

Route::get('/kontak', function () {
    return 'Hubungi Kami di 0511-12345';
});

Route::get('/tentang', function () {
    return 'Kami adalah usaha yang bergerak di bidang jasa Event Organizer,
            telah melayani banyak klien di seluruh Indonesia';
});



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});


Route::prefix('akademik')->name('akademik.')->group(function () {

    Route::resource('mahasiswa', MahasiswaController::class);
    
    Route::resource('matakuliah', MatakuliahController::class);

});

Route::get('/akademik/profil-mahasiswa', function () {
    return view('profil')
        ->with('nama', 'Syifa Nur`aini')
        ->with('nim', 'C050425020')
        ->with('prodi', 'Sistem Informasi Kota Cerdas')
        ->with('semester', '3');
});

Route::get('/sapa-closure', function() {
    $nama = 'Ahmad Fauzi';
    $pesan = "Halo, {$nama}! Ini ditulis langsung di route";
    return $pesan;
});

Route::get('/sapa-controller', [App\Http\Controllers\SapaController::class, 'index']);

Route::get('/latihan-controller', [App\Http\Controllers\LatihanController::class, 'index']);

Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});
Route::post('/mahasiswa-uji', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa-api', [MahasiswaController::class, 'apiIndex']);

Route::get('/mahasiswa/cari-form', function () {
    return view('mahasiswa.cari-form');
});
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cariMahasiswa']);
