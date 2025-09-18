<?php
$servername = "localhost";
$username = "root";
$password = "";
$data_base = "php_dasar";

$conn = mysqli_connect($servername, $username, $password, $data_base);
if (!$conn) {
    die("koneksi berhasil: " . mysqli_connect_error());
}
?>