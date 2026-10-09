<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="8">
    <tr><th>NIM</th><th>Nama</th><th>Prodi</th><th>Semester</th></tr>
    @foreach ($data as $mhs)
    <tr>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->prodi }}</td>
        <td>{{ $mhs->semester }}</td>
    </tr>
    @endforeach
</table>




<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa - Praktikum 5</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $mhs)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mhs->nim }}</td>
                {{-- Penerapan operator ?? jika kolom nama bernilai null --}}
                <td>{!! $mhs->nama !!}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>{{ $mhs->semester }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
