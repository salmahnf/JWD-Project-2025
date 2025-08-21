<?php
require '../config/database.php';
// cek
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ga kosong
    if (!empty($name) && !empty($email) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);
        
        // menyimpan data ke database
        $stmt->execute();
        
        // menutup statement
        $stmt->close();
    }
}

header('Location: ../index.php');
exit;