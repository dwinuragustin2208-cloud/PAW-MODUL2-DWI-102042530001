<?php
$host = "localhost";
$user = "root";
$password = "@Anakkedua22";
$database = "paw_modul2_showroom";
$port = 3306;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>