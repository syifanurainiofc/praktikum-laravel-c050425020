<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StatistikMahasiswaController;
use App\Http\Controllers\Admin\DashboardController;


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

Route::get('/statistik', StatistikMahasiswaController::class);

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

use App\Http\Controllers\HitungTotalSKSController;

Route::get('/totalsks', HitungTotalSKSController::class);

use App\Http\Controllers\QueryBuilderDemoController;

Route::get('/querybuilderdemo.semua', [QueryBuilderDemoController::class, 'tampilkanSemua']);
Route::get('/querybuilderdemo.filter', [QueryBuilderDemoController::class, 'tampilkanFilter']);

Route::get('/statistikprodi', [QueryBuilderDemoController::class, 'statistikProdi']);

Route::get('/mahasiswa/tambah', function() {
    return view('mahasiswa.tambah-mahasiswa');
});

Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'tambahMahasiswa']);

Route::get('/mahasiswa/uji-update', [MahasiswaController::class, 'prosesUpdate']);

Route::get('/mahasiswa/uji-delete', [MahasiswaController::class, 'prosesDelete']);


Route::get('/mahasiswa/paginate', [QueryBuilderDemoController::class, 'tampilkanPaginasi']);

Route::resource('matakuliah', MatakuliahController::class);