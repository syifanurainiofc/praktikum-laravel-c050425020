<h1>Tambah Mata Kuliah</h1>
<form action="/matakuliah/store" method="POST">
    @csrf

    <label>Kode Mata Kuliah: </label>
    <input type="text" name="kode_mk">

    <label>Nama Mata Kuliah: </label>
    <input type="text" name="nama_mk">

    <label>SKS: </label>
    <input type="text" name="sks">

    <label>Semester: </label>
    <input type="text" name="semester">

    <button type="submit">Simpan</button>
</form>



@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Mata Kuliah Baru</h2>
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <input type="text" name="kode_mk" placeholder="Kode MK" required><br><br>
        <input type="text" name="nama_mk" placeholder="Nama Mata Kuliah" required><br><br>
        <input type="number" name="sks" placeholder="Jumlah SKS" required><br><br>
        <input type="number" name="semester" placeholder="Semester" required><br><br>
        <button type="submit">Simpan</button>
        <a href="{{ route('matakuliah.index') }}">Batal</a>
    </form>
</div>
@endsection