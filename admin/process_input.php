<?php
include '../config/database.php';

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$statusBelajar = $_POST['statusBelajar'];
$status = $_POST['status'];

$insert = $connection-> query ("INSERT INTO mahasiswa VALUE ('$nrp','$nama','$alamat','$statusBelajar','$status')");
if ($insert) {
    echo "<script>document.location.href='mahasiswa.php';</script>";
}

?>