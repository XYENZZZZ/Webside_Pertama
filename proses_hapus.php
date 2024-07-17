<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id = $id";

if (mysqli_query($db, $query)) {
    header("Location: data.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}

mysqli_close($db);
?>