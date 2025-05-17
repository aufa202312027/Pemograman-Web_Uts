<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan di URL.";
    exit;
}

$id = (int) $_GET['id'];

// Cek apakah data dengan ID tersebut ada
$query = $conn->query("SELECT * FROM users WHERE id = $id");
if ($query->num_rows == 0) {
    echo "Data tidak ditemukan.";
    exit;
}

// Hapus data
$conn->query("DELETE FROM users WHERE id = $id");

// Redirect ke halaman tampil
header("Location: tampil.php");
exit;
?>
