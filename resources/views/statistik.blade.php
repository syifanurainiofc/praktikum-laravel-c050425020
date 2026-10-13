<!DOCTYPE html>
<html lang = "id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Mahasiswa</title>
    <style>
        body { font-family: sans-serif; margin: 40px; background-color: #f4f6f9; color: #333; }
        .container { max-width: 600px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; border-bottom: 2px solid #ecf0f1; padding-bottom: 10px; }
        .total-box { background: #3498db; color: white; padding: 15px; border-radius: 5px; font-size: 18px; margin-bottom: 20px; font-weight: bold; }
        ul { list-style: none; padding: 0; }
        li { background: #fdfdfd; margin-bottom: 8px; padding: 12px; border-left: 5px solid #2ecc71; border-radius: 3px; display: flex; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .prodi { font-weight: bold; }
        .jumlah { background: #2ecc71; color: white; padding: 2px 8px; border-radius: 10px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
    <h1>Total Mahasiswa: {{$total}}</h1>

    <ul>
        @foreach($perProdi as $item)
            <li>Prodi: {{ $item->prodi }} - Jumlah: {{ $item->jumlah }}</li>
        @endforeach
    </ul>
    </div>
</body>
</html>