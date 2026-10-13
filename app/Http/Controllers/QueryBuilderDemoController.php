<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
    {
        $data = DB::table('mahasiswas')->get();
        return view('demo.query-builder', compact('data'));
    }

    public function tampilkanFilter()
    {
        $data = DB::table('mahasiswas')
                    ->where('semester', '>=', '3')
                    ->orderBy('nama')
                    ->get();
        return view('demo.query-builder', compact('data'));
    }

    public function statistikProdi()
    {
        $rekap = DB::table('mahasiswas')
                ->select('prodi', DB::raw('count(*) as jumlah'))
                ->groupBy('prodi')
                ->get();

        return view('demo.statistik-prodi', compact('rekap'));
    }

    public function Filter2()
    {
        $dataMahasiswa = DB::table('mahasiswas')
                        ->where('prodi', 'Teknik Informatika')
                        ->whereBetween('semester', [3, 6])
                        ->orderBy('nama', 'asc')
                        ->get();
    }
    
    public function tampilkanPaginasi()
    {
        $data = DB::table('mahasiswas')->paginate(10);
        return view('demo.query-builder', compact('data'));
    }
}
