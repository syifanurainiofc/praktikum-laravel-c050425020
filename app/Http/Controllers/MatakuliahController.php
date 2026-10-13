<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->only(['kode_mk', 'nama_mk', 'sks', 'semester']));
        return redirect()->route('matakuliah.index')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function show(Matakuliah $matakuliah) 
    {
        $matakuliah->load('nilai.mahasiswa'); 
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $matakuliah->update($request->only(['kode_mk', 'nama_mk', 'sks', 'semester']));
        return redirect()->route('matakuliah.index')->with('pesan', 'Data berhasil diperbarui');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with('pesan', 'Data berhasil dihapus');
    }

}




