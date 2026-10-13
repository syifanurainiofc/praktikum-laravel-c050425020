<!DOCTYPE html>
<html lang = "id">
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Program Studi</th>
            <th>Jumlah Mahasiswa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rekap as $item)
            <tr>
                <td>{{ $item->prodi }}</td>
                <td>{{ $item->jumlah }} Mahasiswa</td>
            </tr>
        @endforeach
    </tbody>
</table>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Program Studi</title>
</head>
<body>
    <div class="container">
    <ul>
        @foreach($rekap as $item)
            <li>Prodi: {{ $item->prodi }} - Jumlah: {{ $item->jumlah }}</li>
        @endforeach
    </ul>
    </div>
</body>
</html>



