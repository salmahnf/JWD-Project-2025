<?php
require '../config/database.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_content'])) {
    $section = $_POST['section_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $user_id = $_SESSION['user_id'];
    $image_path = null; 

    if (isset($_FILES['article_image']) && $_FILES['article_image']['error'] === 0) {
        $target_dir = "../uploads/"; // tujuan upload

        // nama file unik biar gk ketimpa
        $file_name = uniqid() . '-' . basename($_FILES["article_image"]["name"]);
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($_FILES["article_image"]["tmp_name"], $target_file)) {
            // simpan path ke database
            $image_path = "uploads/" . $file_name;
        }
    }
    
    // menyimpan semua data
    $stmt = $conn->prepare("INSERT INTO content (section_id, title, body, user_id, image_path) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $section, $title, $body, $user_id, $image_path);
    $stmt->execute();
    header('Location: index.php');
    exit;
}

// mengambil data yang ditampilkan di tabel
$result = $conn->query("SELECT id, section_id, title, image_path FROM content ORDER BY created_at DESC");

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
        <a href="../index.php" class="btn btn-secondary">Lihat Website</a>
    </div>

    <div class="card my-4">
        <div class="card-header"><h4>Tambah Artikel Baru</h4></div>
        <div class="card-body">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="section_id" class="form-label">Kategori / Bagian</label>
                    <select class="form-select" name="section_id" id="section_id" required>
                        <option value="">Pilih Bagian</option>
                        <option value="artikel-konsep">Artikel Konsep</option>
                        <option value="artikel-teknologi">Artikel Teknologi</option>
                        <option value="artikel-informasi">Artikel Informasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Artikel</label>
                    <textarea name="body" id="body" rows="3" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="article_image" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" name="article_image" id="article_image">
                </div>
                <button type="submit" name="add_content" class="btn btn-primary">Tambah Artikel</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header"><h4>Daftar Artikel</h4></div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                        <td><?php echo htmlspecialchars($row['section_id']); ?></td>
                        <td>
                            <?php if (!empty($row['image_path'])): ?>
                                <img src="../<?php echo htmlspecialchars($row['image_path']); ?>" alt="Gambar Artikel" style="width: 100px; height: auto;">
                            <?php else: ?>
                                <span class="text-muted">Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>