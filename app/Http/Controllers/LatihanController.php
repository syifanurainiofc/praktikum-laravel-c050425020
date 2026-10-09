<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function  index ()
    {
        $nama = 'Syifa Nur`aini';
        $nim = 'C050425020';
        $prodi = 'Sistem Informasi Kota Cerdas';
        $kalimat = "Halo semua! Perkenalkan nama saya {$nama}, dengan NIM {$nim}. Saya dari Program Studi {$prodi}."; 
        return $kalimat;
    }
}
