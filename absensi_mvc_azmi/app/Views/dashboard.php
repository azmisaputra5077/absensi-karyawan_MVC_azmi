<div class="row">
        <!-- Card Welcome -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow-lg border-0 welcome-card text-white">
                <div class="card-body text-center py-5">
                    <h4 class="mb-3">👋 Selamat datang Azmi Syaputra!</h4>
                    <p class="mb-0 fs-5">
                        Anda login sebagai: <b>admin</b><br>
                        Selamat datang di <b>Sistem Absensi Karyawan</b>.
                    </p>
                </div>
            </div>
        </div>
</div>

<!-- Statistik Section -->
<div class="row mb-4">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 h-100 stat-card-1">
            <div class="card-body text-center py-4">
                <i class="fas fa-users fa-3x mb-3"></i>
                <h2 class="card-title"><?= $totalKaryawan ?? 0 ?></h2>
                <p class="card-text">Total Karyawan</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 h-100 stat-card-2">
            <div class="card-body text-center py-4">
                <i class="fas fa-calendar-check fa-3x mb-3"></i>
                <h2 class="card-title"><?= $absensiHariIni ?? 0 ?></h2>
                <p class="card-text">Absensi Hari Ini</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 h-100 stat-card-3">
            <div class="card-body text-center py-4">
                <i class="fas fa-clock fa-3x mb-3"></i>
                <h2 class="card-title"><?= $tanggalHariIni ?? date('d/m/Y') ?></h2>
                <p class="card-text">Tanggal Hari Ini</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Menu Karyawan -->
    <div class="col-xl-4 col-md-6 mb-4">
        <a href="/karyawan" class="text-decoration-none">
            <div class="card shadow-lg border-0 h-100 menu-card-1 text-white card-hover">
                <div class="card-body text-center py-4">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h5 class="card-title">Menu Karyawan</h5>
                    <p class="card-text">Kelola Data Karyawan</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Menu Absensi -->
    <div class="col-xl-4 col-md-6 mb-4">
        <a href="/absensi" class="text-decoration-none">
            <div class="card shadow-lg border-0 h-100 menu-card-2 text-white card-hover">
                <div class="card-body text-center py-4">
                    <i class="fas fa-calendar-check fa-3x mb-3"></i>
                    <h5 class="card-title">Menu Absensi</h5>
                    <p class="card-text">Catat Kehadiran</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Menu Laporan -->
    <div class="col-xl-4 col-md-6 mb-4">
        <a href="/laporan" class="text-decoration-none">
            <div class="card shadow-lg border-0 h-100 menu-card-3 text-white card-hover">
                <div class="card-body text-center py-4">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h5 class="card-title">Menu Laporan</h5>
                    <p class="card-text">Lihat & Cetak Laporan</p>
                </div>
            </div>
        </a>
    </div>
</div>

<style>
    /* Welcome Card */
    .welcome-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        border-radius: 15px;
        margin-top: 20px;
    }

    /* Stat Cards with Gradients - Light backgrounds, dark text */
    .stat-card-1 {
        background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
        box-shadow: 0 10px 30px rgba(255, 154, 158, 0.3);
        color: #333;
    }
    .stat-card-2 {
        background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        box-shadow: 0 10px 30px rgba(168, 237, 234, 0.3);
        color: #333;
    }
    .stat-card-3 {
        background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);
        box-shadow: 0 10px 30px rgba(210, 153, 194, 0.3);
        color: #333;
    }

    /* Menu Cards with Gradients - Dark backgrounds, white text */
    .menu-card-1 {
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
        box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);
        color: #fff;
    }
    .menu-card-2 {
        background: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
        box-shadow: 0 10px 30px rgba(78, 205, 196, 0.3);
        color: #fff;
    }
    .menu-card-3 {
        background: linear-gradient(135deg, #45b7d1 0%, #96c93d 100%);
        box-shadow: 0 10px 30px rgba(69, 183, 209, 0.3);
        color: #fff;
    }

    /* Hover Effect - Removed scale to eliminate vibration */
    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    /* Card Body Enhancements */
    .card-body {
        transition: all 0.3s ease;
    }

    .card-hover:hover .card-body {
        opacity: 0.9;
    }
</style>
