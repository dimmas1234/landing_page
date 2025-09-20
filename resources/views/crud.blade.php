<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    @if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
    @endif

    <!-- Form Tambah Data -->
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="fakultas" placeholder="Fakultas" required>
        <input type="text" name="prodi" placeholder="Prodi" required>
        <input type="number" name="tahun" placeholder="Tahun" required>
        <button type="submit">Tambah</button>
    </form>

    <!-- Tabel Data -->
    <table border="1" cellpadding="5">
        <tr>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswas as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->fakultas }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>{{ $mhs->tahun }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>