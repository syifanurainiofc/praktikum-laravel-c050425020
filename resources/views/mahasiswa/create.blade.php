@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <input type="text" name="nim" placeholder="NIM"><br><br>
        <input type="text" name="nama" placeholder="Nama"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="text" name="prodi" placeholder="Prodi"><br><br>
        <input type="text" name="semester" placeholder="Semester"><br><br>
        <button type="submit">Simpan</button>
    </form>
</div>
@endsection