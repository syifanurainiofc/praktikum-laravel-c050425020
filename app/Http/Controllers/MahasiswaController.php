<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    Mahasiswa::create($request->only(['nim', 'nama', 'email', 'prodi', 'semester']));
    return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function tambahMahasiswa(Request $request)
    {
        $nim = $request->nim;
        $nama = $request->nama;
        $email = $request->email;
        $prodi = $request->prodi;
        $semester = $request->semester;

        $tambahmhs = DB::table('mahasiswas')
                        ->insert([
                        'nim' => $request->nim, 
                        'nama' => $request->nama, 
                        'email' => $request->email, 
                        'prodi' => $request->prodi,
                        'semester' => $request->semester,
                        'created_at' => now(),
                        'updated_at' => now()
                        ]);

        return "Data berhasil ditambahkan<br> 
                NIM: $nim<br>
                Nama: $nama<br>
                Email: $email<br> 
                Program Studi: $prodi<br> 
                Semester: $semester";
    }

    public function prosesUpdate()
    {
        $updatedata = DB::table('mahasiswas')
        ->where('nim', 'C040694534') 
        ->update([
            'nama' => 'Ani Shreya',
            'semester' => 3,
            'updated_at' => now() 
        ]);

    if ($updatedata) {
        return "Data mahasiswa dengan NIM C040694534 berhasil diupdate di database!<br>Silakan cek di phpMyAdmin.";
    }
    
    return "Proses update gagal, data dengan NIM tersebut tidak ditemukan atau tidak ada perubahan.";
    }

    public function prosesDelete()
    {   
        $hapusdata = DB::table('mahasiswas')
        ->where('nim', 'C040694534') 
        ->delete();

        if ($hapusdata) {
            return "Data mahasiswa dengan NIM C040694534 berhasil dihapus dari database!<br>Silakan cek di phpMyAdmin.";
            }
            
        return "Proses hapus gagal, data dengan NIM tersebut sudah tidak ada.";
    }



    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        $mahasiswa->load('nilai.matakuliah');
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
    $mahasiswa->update($request->only(['nim', 'nama', 'email', 'prodi', 'semester']));
    return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
    $mahasiswa->delete();
    return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil dihapus');
    }

    
}
