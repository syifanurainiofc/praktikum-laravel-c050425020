<h3>Daftar Nilai</h3>
@forelse ($mahasiswa->nilai as $n)
    <p>{{ $n->matakuliah->nama_mk ?? '-' }}: {{ $n->nilai }}</p>
@empty
    <p>Belum ada data nilai.</p>
@endforelse