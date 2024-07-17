<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data Mahasiswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #004aad;
            color: white;
            text-align: center;
            padding: 1px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-edit, .btn-delete, .btn-tambah, .btn-logout{
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 1px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-edit {
            background-color: #f0ad4e;
        }
        .btn-delete {
            background-color: #d9534f;
        }
        .btn-tambah {
            background-color: #5cb85c;
        }
        .btn-logout {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    

<div class="header">
    <h2>Tabel Data Mahasiswa Baru</h2>
</div>
<a href="form_tambah.php"><button class="btn-tambah">Tambah Data Mahasiswa</button></a>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Sekolah Asal</th>
            <th>No HP</th>
            <th>Umur</th>
            <th>Prodi Pilihan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $i = 0;
        $hasil = mysqli_query($db, 'SELECT * FROM mahasiswa') or die(mysqli_error($db));
        $data = mysqli_num_rows($hasil);
        if ($data > 0) {
            while ($row = mysqli_fetch_array($hasil)) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['nama_mhs']; ?></td>
                    <td><?php echo $row['sex']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['kota']; ?></td>
                    <td><?php echo $row['asal_sma']; ?></td>
                    <td><?php echo $row['nohp']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td><?php echo $row['prodi_pilihan']; ?></td>
                    <td>
                        <a href="form_edit.php?id=<?php echo $row['id']; ?>"><button class="btn-edit">Edit</button></a>
                        <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><button class="btn-delete">Delete</button></a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        <a href="logout.php"><button class="btn-logout">Logout</button></a>
    </div>
</body>
</html>
    </tbody>
</table>
</body>
</html>
