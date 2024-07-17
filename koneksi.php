<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "hamzanwadi";
$db = new mysqli ($hostname, $username, $password, $dbname);
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>


