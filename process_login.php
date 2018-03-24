<?php

include 'config/database.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$cek_data = $connection->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$result = $cek_data->fetch_array(MYSQLI_BOTH);
$hasil = $cek_data->num_rows;
if($hasil == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    echo "<script>document.location.href='admin/index.php';</script>";
} else {
    echo "<script>alert('Maaf Password atau Usename salah');document.location.href='login.php';</script>";
}
?>