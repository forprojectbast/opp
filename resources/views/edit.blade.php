
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="p-4 bg-light">
    <h1 class="mb-4 fw-bold">Edit Karyawan</h1>

    <form method="POST" action="/edit/{{ $user->id_user }}" class="no-print" style="max-width: 500px;">
        @csrf
        @method('PUT')

        <label for="username" class="fw-semibold">Username:</label>
        <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" class="form-control" required>
        <br>

        <label for="password" class="fw-semibold">Password:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Kosongkan jika tidak diubah">
        <br>

        <label for="email" class="fw-semibold">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        <br>

        <label for="level" class="fw-semibold">Level:</label>
        <select id="level" name="level" class="form-select" required>
            <option value="">-Pilih-</option>
            <option value="admin" {{ old('level', $user->level) === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="karyawan" {{ old('level', $user->level) === 'karyawan' ? 'selected' : '' }}>Karyawan</option>
            <option value="pelanggan" {{ old('level', $user->level) === 'pelanggan' ? 'selected' : '' }}>Pelanggan</option>
        </select>
        <br>

        <label for="nama" class="fw-semibold">Nama Karyawan:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama_kry) }}" class="form-control" required>
        <br>

        <label for="alamat" class="fw-semibold">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $user->alamat_kry) }}" class="form-control" required>
        <br>

        <label class="fw-semibold">Jenis Kelamin:</label>
        <br>
        <input type="radio" id="jk-pria" name="jk" value="L" class="form-check-input" {{ old('jk', $user->jk_kry) === 'L' ? 'checked' : '' }} required>
        <label for="jk-pria">Pria</label>
        <input type="radio" id="jk-wanita" name="jk" value="P" class="form-check-input" {{ old('jk', $user->jk_kry) === 'P' ? 'checked' : '' }}>
        <label for="jk-wanita">Wanita</label>
        <br><br>

        <label for="jabatan" class="fw-semibold">Jabatan:</label>
        <select id="jabatan" name="jabatan" class="form-select" required>
            <option value="">-Pilih-</option>
            @foreach ($jabatan as $value)
                <option value="{{ $value->id_jabatan }}" {{ (string) old('jabatan', $user->id_jabatan) === (string) $value->id_jabatan ? 'selected' : '' }}>
                    {{ $value->nama_jabatan }}
                </option>
            @endforeach
        </select>
        <br>

        <label for="agama" class="fw-semibold">Agama:</label>
        <select id="agama" name="agama" class="form-select" required>
            <option value="">-Pilih-</option>
            @foreach ($agama as $value)
                <option value="{{ $value->id_agama }}" {{ (string) old('agama', $user->id_agama) === (string) $value->id_agama ? 'selected' : '' }}>
                    {{ $value->nama_agama }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit" class="btn btn-primary px-4">Simpan</button>
        <a href="/home" class="btn btn-secondary px-4">Kembali</a>
    </form>
</body>
</html>
