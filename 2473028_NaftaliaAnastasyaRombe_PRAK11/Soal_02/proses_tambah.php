<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

mysqli_query($conn,
"INSERT INTO siswa VALUES('', '$nama', '$kelas')");

header("Location:index.php");

?>