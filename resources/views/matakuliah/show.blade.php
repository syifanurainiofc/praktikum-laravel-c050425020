@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Mata Kuliah</h2>
    <p><strong>Kode:</strong> {{ $matakuliah->kode_mk }}</p>
    <p><strong>Nama:</strong> {{ $matakuliah->nama_mk }}</p>
    <p><strong>SKS:</strong> {{ $matakuliah->sks }}</p>
    <p><strong>Semester:</strong> {{ $matakuliah->semester }}</p>

    <h3>Daftar Mahasiswa yang Mengambil Mata Kuliah Ini:</h3>
    <ul>
        @forelse ($matakuliah->nilai as $n)
            <li>{{ $n->mahasiswa->nim }} - {{ $n->mahasiswa->nama }} (Nilai Angka: {{ $n->nilai }})</li>
        @empty
            <li>Belum ada mahasiswa yang mengambil mata kuliah ini.</li>
        @endforelse
    </ul>

    <p><a href="{{ route('matakuliah.index') }}"><< Kembali ke Daftar</a></p>
</div>
@endsection