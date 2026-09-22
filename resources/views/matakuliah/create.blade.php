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