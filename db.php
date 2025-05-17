<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utsaufa";

// Gunakan port 3306 (default) atau 3307 kalau kamu sudah ubah di my.ini
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
