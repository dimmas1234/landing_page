<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container form-container">
        <h2>Tambah Mahasiswa</h2>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="fakultas" placeholder="Fakultas" required>
            <input type="text" name="prodi" placeholder="Prodi" required>
            <input type="number" name="tahun" placeholder="Tahun" required>
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn-back">Kembali</a>
        </form>
    </div>
</body>

</html>