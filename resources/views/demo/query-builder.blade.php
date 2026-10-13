<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Query Builder Demo</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->prodi }}</td>
                <td>{{ $item->semester }}</td>
            </tr>
            @empty
            <tr>
                <td>Data mahasiswa tidak ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 15px;">
        {{ $data->links() }}
    </div>
</body>
</html>
