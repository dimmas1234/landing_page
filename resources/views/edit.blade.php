<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
        <input type="text" name="fakultas" value="{{ $mahasiswa->fakultas }}" required>
        <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" required>
        <input type="number" name="tahun" value="{{ $mahasiswa->tahun }}" required>
        <button type="submit">Update</button>
    </form>
</body>

</html>