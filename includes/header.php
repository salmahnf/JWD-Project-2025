<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Production</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            padding-top: 56px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-pastel-pink fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/logo1.png" alt="Logo DSI" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profile">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#visi">Visi dan Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk Kami</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Artikel</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#artikel-konsep">Konsep</a></li>
                            <li><a class="dropdown-item" href="#artikel-teknologi">Teknologi</a></li>
                            <li><a class="dropdown-item" href="#artikel-informasi">Informasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#event">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#klien">Klien</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item"><a href="admin/" class="btn btn-warning me-2">Dashboard</a></li>
                        <li class="nav-item"><a href="handlers/logout_handler.php" class="btn btn-danger">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><button class="btn btn-outline-light me-2" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</button></li>
                        <li class="nav-item"><button class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#signupModal">Register</button></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>