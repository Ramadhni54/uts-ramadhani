<?php 
$pageTitle = "User Dashboard";
include 'header.php'; 
?>

<div class="container my-5">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 font-weight-bold text-primary">Dashboard Pengguna</h1>
        <p class="lead">Selamat datang! Kelola profil Anda, lihat seminar yang diikuti, dan cek sertifikat yang telah diterima.</p>
    </div>

    <!-- Summary Section -->
    <div class="row text-center mb-5">
        <div class="col-md-4">
            <div class="card shadow-lg rounded border-0 mb-4 mb-md-0">
                <div class="card-body">
                    <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                    <h4 class="text-primary">Acara yang Diikuti</h4>
                    <h2 class="display-4">5</h2>
                    <p>Total acara yang telah Anda ikuti.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg rounded border-0 mb-4 mb-md-0">
                <div class="card-body">
                    <i class="fas fa-certificate fa-3x text-primary mb-3"></i>
                    <h4 class="text-primary">Sertifikasi yang Diterima</h4>
                    <h2 class="display-4">3</h2>
                    <p>Total sertifikat yang telah Anda terima.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg rounded border-0 mb-4 mb-md-0">
                <div class="card-body">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h4 class="text-primary">Tanggal Bergabung</h4>
                    <h2 class="display-4">2024</h2>
                    <p>Bergabung dengan platform sejak tahun.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seminar & Events Section -->
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card shadow-lg h-100 rounded border-0">
                <div class="card-body text-center">
                    <img src="assets/images/seminar.svg" alt="Seminar Event" width="80" class="mb-3">
                    <h5 class="mt-3">Seminar Mendatang</h5>
                    <p>Lihat daftar seminar yang akan datang dan segera daftar untuk ikut serta!</p>
                    <a href="seminar.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Lihat Seminar</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-lg h-100 rounded border-0">
                <div class="card-body text-center">
                    <img src="assets/images/webinar.svg" alt="Webinar Event" width="80" class="mb-3">
                    <h5 class="mt-3">Webinar Terkait</h5>
                    <p>Jangan lewatkan webinar menarik di platform kami yang pasti bermanfaat.</p>
                    <a href="webinar.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Lihat Webinar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- My Certificates Section -->
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card shadow-lg h-100 rounded border-0">
                <div class="card-body text-center">
                    <img src="assets/images/my_certificates.svg" alt="My Certificates" width="80" class="mb-3">
                    <h5 class="mt-3">Sertifikasi Saya</h5>
                    <p>Unduh sertifikat dari acara yang telah Anda ikuti dan simpan dengan mudah.</p>
                    <a href="my-certificates.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Lihat Sertifikat</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-lg h-100 rounded border-0">
                <div class="card-body text-center">
                    <img src="assets/images/my_profile.svg" alt="My Profile" width="80" class="mb-3">
                    <h5 class="mt-3">Profil Saya</h5>
                    <p>Perbarui informasi profil Anda dan kelola pengaturan pribadi.</p>
                    <a href="my-profile.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Kelola Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
