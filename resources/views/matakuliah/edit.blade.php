@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Mata Kuliah: {{ $matakuliah->nama_mk }}</h2>
    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="kode_mk" value="{{ $matakuliah->kode_mk }}" required><br><br>
        <input type="text" name="nama_mk" value="{{ $matakuliah->nama_mk }}" required><br><br>
        <input type="number" name="sks" value="{{ $matakuliah->sks }}" required><br><br>
        <input type="number" name="semester" value="{{ $matakuliah->semester }}" required><br><br>
        <button type="submit">Perbarui</button>
        <a href="{{ route('matakuliah.index') }}">Batal</a>
    </form>
</div>
@endsection