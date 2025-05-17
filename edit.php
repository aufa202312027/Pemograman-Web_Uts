<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan di URL.";
    exit;
}

$id = (int) $_GET['id'];
$query = $conn->query("SELECT * FROM users WHERE id = $id");

if (!$query || $query->num_rows == 0) {
    echo "Data tidak ditemukan.";
    exit;
}

$data = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pengguna</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
    <div class="card">
        <h2>Edit Data Pengguna</h2>
        <form method="POST" action="update.php">
            <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" placeholder="Nama lengkap" required />
            <input type="email" name="email" value="<?= htmlspecialchars($data['email']) ?>" placeholder="Email aktif" required />
            <input type="password" name="password" placeholder="Kosongkan jika tidak ingin ganti password" />
            <button type="submit">Update</button>
        </form>
        <a href="tampil.php" class="link" style="margin-top: 12px; display: inline-block;">Kembali ke Data Pengguna</a>
    </div>
</div>
</body>
</html>
