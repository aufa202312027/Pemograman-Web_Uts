<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    if (!empty($password)) {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET nama=?, email=?, password=? WHERE id=?");
        $stmt->bind_param("sssi", $nama, $email, $password_hashed, $id);
    } else {
        $stmt = $conn->prepare("UPDATE users SET nama=?, email=? WHERE id=?");
        $stmt->bind_param("ssi", $nama, $email, $id);
    }

    if ($stmt->execute()) {
        // Tampilkan halaman konfirmasi, jangan redirect
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Update Berhasil</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
            <style>
                body { font-family: 'Poppins', sans-serif; background: #f0f2f5; padding: 50px; }
                .container { max-width: 500px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; }
                .btn { display: inline-block; margin-top: 20px; padding: 12px 24px; background: #4CAF50; color: white; border: none; border-radius: 5px; text-decoration: none; font-weight: 600; }
                .btn:hover { background: #45a049; }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Data berhasil diperbarui!</h2>
                <a href="tampil.php" class="btn">Kembali ke Data Pengguna</a>
            </div>
        </body>
        </html>
        <?php
        exit;
    } else {
        echo "Gagal update data: " . $conn->error;
    }
} else {
    header("Location: tampil.php");
    exit;
}
