<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() 
    { 
        return 'index: daftar mahasiswa'; 
    }

    public function create() 
    { 
        return 'create: form tambah mahasiswa'; 
    }

    public function store(Request $request) 
    { 
        $nama = $request->input('nama');
        $nim = $request->input('nim');

        return "Data yang diterima -> NIM: $nim, Nama: $nama"; 
    }

    public function apiIndex()
    {
        return response()->json([
        'status' => 'sukses',
        'pesan' => 'Ini contoh response JSON dari Controller',
    ]);
    }


    public function cariMahasiswa(Request $request) 
    { 
        $kataKunci = $request->input('nama');
        return "Kata kunci yang Anda cari adalah:" . $kataKunci; 
    }
    
    public function show($id) 
    { 
        return "show: detail mahasiswa id {$id}"; 
    }

    public function edit($id) 
    { 
        return "edit: form edit mahasiswa id {$id}"; 
    }

    public function update(Request $request, $id) 
    { 
        return "update: perbarui data id {$id}"; 
    }

    public function destroy($id) 
    { 
        return "destroy: hapus data id {$id}"; 
    }
}
