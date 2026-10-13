<form action="/mahasiswa/tambah" method="POST">
    @csrf
    <input type="text" name="nim" placeholder="NIM"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="prodi" placeholder="Program Studi"><br>
    <input type="text" name="semester" placeholder="Semester"><br>
    <button type="submit">Tambahkan</button>
</form>