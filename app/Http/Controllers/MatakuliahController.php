<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah; 
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // 1. Method index diubah untuk menampilkan daftar mata kuliah dari database
    public function index()
    {
        $matakuliah = Matakuliah::all(); // Mengambil data asli database
        return view('matakuliah.index', compact('matakuliah'));
    }

    // 2. Method show diubah menggunakan Route Model Binding
    public function show(Matakuliah $matakuliah)
    {
        return view('matakuliah.show', compact('matakuliah'));
    }
}
