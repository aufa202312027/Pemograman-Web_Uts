<?php
include 'db.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($password)) {
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE users SET nama=?, email=?, password=? WHERE id=?");
    $stmt->bind_param("sssi", $nama, $email, $hashed, $id);
} else {
    $stmt = $conn->prepare("UPDATE users SET nama=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $nama, $email, $id);
}

$stmt->execute();
header("Location: tampil.php");
?>
