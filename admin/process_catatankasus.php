<?php
include '../config/database.php';

$nrp = $_POST['nrp'];
$kasus = $_POST['kasus'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];

$insert = $connection->query("INSERT INTO catatan_kasus VALUE ('','$nrp','$kasus','$keterangan','$tanggal')");
if ($insert) {
    echo "<script>document.location.href='catatan_kasus.php';</script>";
}

?>
