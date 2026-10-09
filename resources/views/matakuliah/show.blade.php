<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Data Mata Kuliah</h1>
    <ul>
        <li><strong>Kode Mata Kuliah:</strong> {{ $matakuliah->kode }}</li>
        <li><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_mk }}</li> 
        <li><strong>Jumlah SKS:</strong> {{ $matakuliah->sks }}</li>
    </ul>
    <a href="{{ route('akademik.matakuliah.index') }}">&laquo; Kembali ke Daftar</a>
</body>
</html>
