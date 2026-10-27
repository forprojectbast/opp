<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="p-4 bg-light">

    <h1 class="mb-4 fw-bold">Input Pelanggan</h1>

    <form action="/aksi_tplg" method="POST" class="no-print" style="max-width: 500px;">
        @csrf

        <label class="fw-semibold">Nama Pelanggan:</label>
        <input type="text" name="nama" class="form-control" required>
        <br>

        <label class="fw-semibold">Alamat:</label>
        <input type="text" name="alamat" class="form-control" required>
        <br>

        <label class="fw-semibold">No HP:</label>
        <input type="text" name="no_hp" class="form-control" required>
        <br>

        <button type="submit" class="btn btn-primary px-4">Simpan</button>
        <a href="/pelanggan" class="btn btn-secondary px-4">Kembali</a>
        
    </form>

</body>
</html>
