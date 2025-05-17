<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna Kreatif</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Pengguna</h2>
    <a href="index.php" class="link">+ Tambah Pengguna Baru</a>
    <div class="cards">
        <?php
        $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="card">
            <h3><?= htmlspecialchars($row['nama']) ?></h3>
            <p><strong>Email:</strong> <?= htmlspecialchars($row['email']) ?></p>
            <div class="card-actions">
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>
