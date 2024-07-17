<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
include "koneksi.php";
$id = $_POST['id'];
$nama_mhs = $_POST['nama_mhs'];
$sex = $_POST['sex'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$asal_sma = $_POST['asal_sma'];
$nohp = $_POST['nohp'];
$umur = $_POST['umur'];
$prodi_pilihan = $_POST['prodi_pilihan'];
$query = "UPDATE mahasiswa SET nama_mhs='$nama_mhs', sex='$sex', alamat='$alamat', kota='$kota', asal_sma='$asal_sma', nohp='$nohp', umur='$umur', prodi_pilihan='$prodi_pilihan' WHERE id=$id";
if (mysqli_query($db, $query)) {
    header("Location: data.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
