<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
        public function create()
        {
        return view('matakuliah.create');
        }

        public function store(Request $request)
        {
        Matakuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'dosen_id' => 1
            ]);
        return redirect('/matakuliah');
        }
}
