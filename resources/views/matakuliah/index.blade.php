<h1>Daftar Mata Kuliah</h1>
<table border="1" cellpadding="8">
    <tr><th>Kode_MK</th><th>Nama Mata Kuliah</th><th>SKS</th><th>Semester</th><th>Dosen Pengampu</th></tr>
    @foreach ($matakuliah as $mk)
    <tr>
        <td>{{ $mk->kode_mk }}</td>
        <td>{{ $mk->nama_mk }}</td>
        <td>{{ $mk->sks }}</td>
        <td>{{ $mk->semester }}</td>
        <td>{{ $mk->dosen->name }}</td>
    </tr>
    @endforeach
</table>





<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>]
<body>
    <h1>Daftar Seluruh Mata Kuliah</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliah as $index => $mk)
            <tr>
                <td>
            {{ $loop->iteration }} 
            @if($loop->first) (Awal) @endif 
            @if($loop->last) (Akhir) @endif
                </td>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    @if ($mk->sks > 3)
                        <span style="color: red; font-weight: bold;">SKS Besar</span>
                    @else
                        <span style="color: green;">Standar</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>




@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Mata Kuliah</h2>
    <a href="{{ route('matakuliah.create') }}" style="background: green; color: white; padding: 5px 10px; text-decoration: none;">+ Tambah MK</a>
    
    @if(session('pesan'))
        <p style="color: green;">{{ session('pesan') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; margin-top: 15px;">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($matakuliah as $mk)
                <tr>
                    <td>{{ $mk->kode_mk }}</td>
                    <td><a href="{{ route('matakuliah.show', $mk->id) }}">{{ $mk->nama_mk }}</a></td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->semester }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $mk->id) }}">Edit</a> | 
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada data mata kuliah.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
