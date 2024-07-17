<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <style>
        .btn-Update{
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
        .btn-Update{
            background-color: #5cb85c;
        }
        </style>
</head>
<body>
<h1>Edit Data Mahasiswa</h1>
<form method="POST" action="proses_edit.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs']; ?>" required>
    <input type="text" name="sex" value="<?php echo $row['sex']; ?>" required>
    <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required>
    <input type="text" name="kota" value="<?php echo $row['kota']; ?>" required>
    <input type="text" name="asal_sma" value="<?php echo $row['asal_sma']; ?>" required>
    <input type="text" name="nohp" value="<?php echo $row['nohp']; ?>" required>
    <input type="number" name="umur" value="<?php echo $row['umur']; ?>" required>
    <input type="text" name="prodi_pilihan" value="<?php echo $row['prodi_pilihan']; ?>" required>
    <button class="btn-Update">Update</button>
</form>
</body>
</html>
