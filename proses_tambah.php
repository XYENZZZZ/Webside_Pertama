<?php
include "koneksi.php";
$nama_mhs = $_POST['nama_mhs'];
$sex = $_POST['sex'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$asal_sma = $_POST['asal_sma'];
$nohp = $_POST['nohp'];
$umur = $_POST['umur'];
$prodi_pilihan = $_POST['prodi_pilihan'];

$query = "INSERT INTO mahasiswa (nama_mhs, sex, alamat, kota, asal_sma, nohp, umur, prodi_pilihan) 
          VALUES ('$nama_mhs', '$sex', '$alamat', '$kota', '$asal_sma', '$nohp', '$umur', '$prodi_pilihan')";
if (mysqli_query($db, $query)) {
    echo "Data berhasil ditambahkan. <a href='data.php'>Kembali ke Tabel</a>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}

mysqli_close($db);
?>



