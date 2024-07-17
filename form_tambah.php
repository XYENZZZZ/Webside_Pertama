<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <style>
         font-family: Arial, sans-serif;
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
        .btn-tambah {
            background-color: #5cb85c;
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
    </style>
</head>
<body>

<div class="header">
    <h2>Tambah Data Mahasiswa</h2>
</div>

<form method="POST" action="proses_tambah.php">
    <input type="text" name="nama_mhs" placeholder="Nama" required>
    <input type="text" name="sex" placeholder="Jenis Kelamin" required>
    <input type="text" name="alamat" placeholder="Alamat" required>
    <input type="text" name="kota" placeholder="Kota" required>
    <input type="text" name="asal_sma" placeholder="Sekolah Asal" required>
    <input type="text" name="nohp" placeholder="No HP" required>
    <input type="number" name="umur" placeholder="Umur" required>
    <input type="text" name="prodi_pilihan" placeholder="Prodi Pilihan" required>
    <button type="submit" class="btn-tambah">Tambah</button>
</form>
</body>
</html>