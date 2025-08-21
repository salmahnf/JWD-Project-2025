<?php
require 'config/database.php';
require 'includes/header.php';

// put dr database
$contents = [];
$result = $conn->query("SELECT section_id, title, body, image_path FROM content ORDER BY created_at DESC LIMIT 4");
while ($row = $result->fetch_assoc()) {
    $contents[$row['section_id']][] = $row;
}
?>

<section id="home" class="py-5  " style="padding-top: 10rem !important;">
    <div class="container text-center">
        <img src="assets/company.png" alt="Foto" class="img-fluid rounded mb-4" style="max-width: 400px;">
        <h1>Creative Production</h1>
        <p>Perusahaan produksi kreatif yang menyediakan layanan branding, desain, fotografi, videografi, dan digital
            campaign untuk bisnis yang ingin tumbuh lewat visual yang kuat.</p>
    </div>
</section>

<section id="profile" class="py-5 bg-light " style="padding-top: 10rem !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4">About Us</h2>
                <p>Didirikan pada 2025, PT Creative Production berawal dari studio kecil yang gemar mengubah ide menjadi
                    karya visual yang berdampak. Seiring kebutuhan pasar akan konten yang berkualitas dan konsisten,
                    kami berkembang menjadi agensi kreatif & rumah produksi yang menggabungkan strategi pemasaran dengan
                    eksekusi desain & produksi konten.</p>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-4">
                <i class="bi bi-palette2 display-4 mb-3"></i>
                <h4>Branding & Desain</h4>
                <p>Identitas merek, guideline, kemasan.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-camera-reels display-4 mb-3"></i>
                <h4>Produksi Foto & Video</h4>
                <p>Iklan, profil perusahaan, produk, event.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-megaphone display-4 mb-3"></i>
                <h4>Konten Digital & Campaign</h4>
                <p>Social media, landing page, ads asset.</p>
            </div>
        </div>
    </div>
</section>

<section id="visi" class="py-5" style="padding-top: 13rem !important;">
    <div class="container">
        <h2 class="text-center mb-5">Visi dan Misi</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Visi</h4>
                        <p class="card-text">Menjadi mitra kreatif paling tepercaya di Indonesia yang membantu brand
                            bertumbuh melalui karya visual yang strategis dan bernilai bisnis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Misi</h4>
                        <ul class="list-unstyled">
                            <li> ⭐ Menghasilkan konten kreatif yang relevan dan berdampak.</li>
                            <li> ⭐ Membangun proses kerja yang transparan dan terukur.</li>
                            <li> ⭐ Mengembangkan talenta kreatif lokal berstandar internasional.</li>
                            <li> ⭐ Memanfaatkan data untuk mengoptimalkan performa kampanye.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kelebihan" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Profil & Kelebihan Kami</h2>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h4>Profil Singkat</h4>
                <p><strong>Company:</strong> PT Creative Production<br>
                    <strong>Berdiri:</strong> 2025<br>
                    <strong>Tim:</strong> 30+ personil (strategist, desainer, fotografer, videografer, dll)<br>
                    <strong>Kapabilitas:</strong> Studio foto-video & tim pascaproduksi in-house.
                </p>
                <h4>Pengalaman Utama</h4>
                <p>Berpengalaman menangani klien dari industri FMCG, Teknologi, Pendidikan, hingga UMKM dalam peluncuran
                    produk, rebranding, dan kampanye digital.</p>
            </div>
        </div>
    </div>
</section>

<section id="produk" class="py-5" style="padding-top: 10rem !important;">
    <div class="container">
        <h2 class="text-center mb-5">Produk & Jasa Perusahaan</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <h5>1) Branding & Desain</h5>
                <ul class="small">
                    <li>Identitas merek (logo, warna, tipografi)</li>
                    <li>Desain kemasan & materi promosi</li>
                    <li>Company profile (print & web)</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <h5>2) Produksi Foto</h5>
                <ul class="small">
                    <li>Foto produk (studio & lifestyle)</li>
                    <li>Foto korporat & portrait eksekutif</li>
                    <li>Dokumentasi event</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <h5>3) Produksi Video</h5>
                <ul class="small">
                    <li>Iklan TVC/digital, company profile</li>
                    <li>Social media short-form (Reels/TikTok)</li>
                    <li>Motion graphics & animasi 2D</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <h5>4) Digital Content & Campaign</h5>
                <ul class="small">
                    <li>Content planning kalender bulanan</li>
                    <li>Desain feed, banner, landing page</li>
                    <li>Ads asset + report performa (opsional)</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center">Contoh Paket Populer</h5>
                        <ul class="list-unstyled">
                            <li><strong>Starter Brand Kit:</strong> Logo + mini guideline + 5 materi promosi.</li>
                            <li><strong>Product Launch Kit:</strong> Video 30 detik + 10 foto produk + 15 aset sosial.
                            </li>
                            <li><strong>Event Coverage Pro:</strong> Foto + video highlight 60 detik + 50 foto edit.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="py-5 bg-light" style="padding-top: 10rem !important;">
    <div class="container">
        <h2 class="text-center mb-5">Galeri Foto</h2>

        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://www.simplidots.com/wp-content/uploads/2024/08/192113cf0e9626ada9b1c86ef9696037-scaled-1.jpg"
                                    class="card-img-top" alt="Kampanye FMCG">
                                <div class="card-body">
                                    <h5 class="card-title">Kampanye Peluncuran FMCG</h5>
                                    <p class="card-text small text-muted">Set studio & lifestyle session.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://www.unsell.design/wp-content/uploads/2020/12/cb3ad9d0-company-profile-template-free.jpg"
                                    class="card-img-top" alt="Company Profile Tech Startup">
                                <div class="card-body">
                                    <h5 class="card-title">Company Profile – Tech Startup</h5>
                                    <p class="card-text small text-muted">Cinematic office walkthrough.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://thebiteshot.com/wp-content/uploads/2022/10/back-light-setup-1024x672.png"
                                    class="card-img-top" alt="Food & Beverage">
                                <div class="card-body">
                                    <h5 class="card-title">Food & Beverage</h5>
                                    <p class="card-text small text-muted">Light setup untuk tekstur & steam effect.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://agievent.com/uploads/0000/6/2024/06/11/hybrid-event-jakarta.jpg"
                                    class="card-img-top" alt="Event Konferensi"
                                    style="height: 220px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Event Konferensi 2024</h5>
                                    <p class="card-text small text-muted">Dokumentasi multi-kamera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://thegirloutdoors.co.uk/wp-content/uploads/2014/11/finisterre.jpg"
                                    class="card-img-top" alt="Fashion Lookbook"
                                    style="height: 220px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Fashion Lookbook</h5>
                                    <p class="card-text small text-muted">Outdoor golden hour series.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU-FrLtQJHAA2ltIZ3h8mb7pXvr5vTXlQcLA&s"
                                    class="card-img-top" alt="Charity Shoot" style="height: 220px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Charity Shoot Day</h5>
                                    <p class="card-text small text-muted">Dokumentasi pro bono UMKM lokal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<div class="container">
    <hr class="my-5">
</div>

<section id="klien" class="py-5" style="padding-top: 10rem !important;">
    <div class="container">
        <h2 class="text-center mb-5">Klien Kami</h2>
        <div class="row text-center align-items-center justify-content-center">

            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsctfDfb5jDirDNDrbYkSEkooVawXr2hFy0Q&s"
                    class="rounded-circle img-fluid shadow-sm mb-2" alt="Logo Nusantara Foods">
                <h6 class="fw-bold">Nusantara Foods</h6>
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2ldeVj93a5BGwGVPh7yX2td81ALB00KoDQw&s"
                    class="rounded-circle img-fluid shadow-sm mb-2" alt="Logo EduPrime">
                <h6 class="fw-bold">EduPrime</h6>
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <img src="https://img.freepik.com/premium-vector/leaf-tech-logo-vector-leaf-technology-logo-template_9850-551.jpg?semt=ais_hybrid&w=740&q=80"
                    class="rounded-circle img-fluid shadow-sm mb-2" alt="Logo Leaf Tech">
                <h6 class="fw-bold">Leaf Tech</h6>
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMRX4Ph383mq1IecuoZJmYVrxMiVd-sq5L7g&s"
                    class="rounded-circle img-fluid shadow-sm mb-2" alt="Logo Urban Coffee">
                <h6 class="fw-bold">Urban Coffee</h6>
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy6RIJVqM6VlfmUSc7I3pGveQFUFmKag2itA&s"
                    class="rounded-circle img-fluid shadow-sm mb-2" alt="Logo Apparel">
                <h6 class="fw-bold">Cloth & Co</h6>
            </div>

        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <figure class="text-center p-4">
                                <blockquote class="blockquote">
                                    <p class="mb-0 fst-italic">“Timnya responsif, hasil konsisten dengan brand kami.”
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer mb-0 mt-2">
                                    Marketing Lead, <cite title="Nusantara Foods">Nusantara Foods</cite>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="carousel-item">
                            <figure class="text-center p-4">
                                <blockquote class="blockquote">
                                    <p class="mb-0 fst-italic">“Kualitas produksi videonya melebihi ekspektasi. Sangat
                                        direkomendasikan!”</p>
                                </blockquote>
                                <figcaption class="blockquote-footer mb-0 mt-2">
                                    CEO, <cite title="Leaf Tech">Leaf Tech</cite>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="carousel-item">
                            <figure class="text-center p-4">
                                <blockquote class="blockquote">
                                    <p class="mb-0 fst-italic">“Proses kerja yang terstruktur membuat proyek berjalan
                                        lancar dan tepat waktu.”</p>
                                </blockquote>
                                <figcaption class="blockquote-footer mb-0 mt-2">
                                    Project Manager, <cite title="EduPrime">EduPrime</cite>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <hr class="my-5">
</div>

<section id="event" class="py-5" style="padding-top: 10rem !important;">
    <div class="container">
        <h2 class="text-center mb-5">Event & Kegiatan Perusahaan</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="list-group">
                    <div class="list-group-item flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Creative Talk: Storytelling for FMCG</h5>
                            <small>Mei 2024</small>
                        </div>
                        <p class="mb-1">Dihadiri oleh 120 peserta dari berbagai industri.</p>
                    </div>
                    <div class="list-group-item flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Open Studio Day</h5>
                            <small>Agustus 2024</small>
                        </div>
                        <p class="mb-1">Sesi demo lighting & color grading untuk para profesional kreatif.</p>
                    </div>
                    <div class="list-group-item flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Workshop “Mobile Content Pro”</h5>
                            <small>Januari 2025</small>
                        </div>
                        <p class="mb-1">Kolaborasi dengan komunitas kampus untuk meningkatkan skill konten kreator muda.
                        </p>
                    </div>
                    <div class="list-group-item flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Charity Shoot Day</h5>
                            <small>Maret 2025</small>
                        </div>
                        <p class="mb-1">Program dokumentasi pro bono untuk membantu UMKM lokal go digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="artikel-konsep" class="py-5" style="padding-top: 10rem !important;">
    <div class="container">
        <h2 class="text-center mb-5">Artikel - Konsep</h2>
        <div class="row">
            <?php if (!empty($contents['artikel-konsep'])): ?>
                <?php foreach ($contents['artikel-konsep'] as $item): ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm">

                            <?php if (!empty($item['image_path'])): ?>
                                <img src="<?php echo htmlspecialchars($item['image_path']); ?>" class="card-img-top"
                                    alt="<?php echo $item['title']; ?>" style="height: 200px; object-fit: cover;">
                            <?php endif; ?>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h5>
                                <p class="card-text"><?php echo nl2br(htmlspecialchars($item['body'])); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col">
                    <p class="text-muted text-center">Belum ada konten untuk bagian ini.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="artikel-teknologi" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Artikel - Teknologi</h2>
        <div class="row">
            <?php if (!empty($contents['artikel-teknologi'])): foreach ($contents['artikel-teknologi'] as $item): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php if (!empty($item['image_path'])): ?>
                            <img src="<?php echo htmlspecialchars($item['image_path']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['title']); ?>" style="height: 200px; object-fit: cover;">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($item['body'])); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; else: ?>
                <div class="col">
                    <p class="text-muted text-center">Belum ada konten untuk bagian ini.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="artikel-informasi" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Artikel - Informasi</h2>
        <div class="row">
            <?php if (!empty($contents['artikel-informasi'])): foreach ($contents['artikel-informasi'] as $item): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php if (!empty($item['image_path'])): ?>
                            <img src="<?php echo htmlspecialchars($item['image_path']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['title']); ?>" style="height: 200px; object-fit: cover;">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($item['body'])); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; else: ?>
                <div class="col">
                    <p class="text-muted text-center">Belum ada konten untuk bagian ini.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="kontak" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Kontak Kami</h2>
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <h4>PT Creative Production</h4>
                <p>Jl. Kreatif No. 99, Yogyakarta, Indonesia</p>
                <ul class="list-unstyled">
                    <li><strong>Telp:</strong> 081234567890</li>
                    <li><strong>Email:</strong> company@creativeproduction.co.id</li>
                    <li class="mt-3"><strong>Jam Operasional:</strong><br>Senin–Jumat, 09.00–18.00 WIB</li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="ratio ratio-4x3 rounded shadow-sm" style="max-height: 360px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.181212807702!2d110.37598631529501!3d-7.770546979269505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b3637a28a3%3A0x1e0f071c3b53b92f!2sUPN%20%22Veteran%22%20Yogyakarta!5e0!3m2!1sen!2sid!4v1724210255392!5m2!1sen!2sid" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require 'includes/footer.php'; ?>