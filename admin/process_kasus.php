<?php
include '../config/database.php';

$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];

$insert = $connection->query("INSERT INTO kasus VALUE ('','$nama','$keterangan')");
if ($insert) {
    echo "<script>document.location.href='input_catatankasus.php';</script>";
}

?>


