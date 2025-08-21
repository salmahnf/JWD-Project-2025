<?php
require '../config/database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ambil data dr form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // menjalankan query ke database
    $stmt->execute();

    // ambil hasil dari query yang dijalankan
    $result = $stmt->get_result();

    // cek apakah pengguna ditemukan
    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {

            // buat session buat nanddain pengguna dah login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header('Location: ../index.php');
            exit;
        }
    }
    $_SESSION['login_error'] = "Akun tidak ditemukan atau password salah.";
    header('Location: ../index.php');
    exit;
}
