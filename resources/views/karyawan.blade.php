
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA KARYAWAN</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
<nav class="navbar navbar-dark bg-primary no-print mb-4">
    <form action="/home" method="GET" class="d-flex flex-wrap align-items-center mb-0">
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/home">Home</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/karyawan">Karyawan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/pelanggan">Pelanggan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/tkry">Tambah Karyawan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/tplg">Tambah Pelanggan</button>
        <button type="submit" class="btn btn-light btn-sm ms-auto" formaction="/logout">Logout</button>
    </form>
</nav>
<h1>Data Karyawan</h1>
<br>
<a href="/tkry"><button class="btn btn-secondary">Tambah Karyawan</button></a>
<br><br>

  <table id="users-table" class="table table-bordered table-striped" border="1">
       
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Alamat Karyawan</th>
                <th>Jabatan</th>
                <th>Agama</th>
            </tr>

        <?php
        $no=1;
        foreach ($karyawan as $key => $value) {
        ?>
        <?php if ($value->id_karyawan) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $value->nama_kry ?></td>
            <td><?= $value->alamat_kry ?></td>
            <td><?= $value->nama_jabatan ?></td>
            <td><?= $value->nama_agama ?></td>
            
        </tr>
        <?php } ?>
        <?php
        }
        ?>
    </table>




<a href="/home"><button class="btn btn-secondary">Kembali ke Dashboard</button></a>

</body>
</html>
