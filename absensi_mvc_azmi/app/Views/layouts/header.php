<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan - Azmi Syaputra</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffffff !important;
        }
        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #74b9ff !important;
        }
        .snowflake {
            position: absolute;
            top: -10px;
            color: #ffffff;
            font-size: 1.5em;
            font-family: Arial, sans-serif;
            text-shadow: 0 0 5px #fff;
            user-select: none;
            pointer-events: none;
            animation: snowfall linear infinite;
        }

        @keyframes snowfall {
            0% {
                transform: translateY(-10px) translateX(0px);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) translateX(50px);
                opacity: 0.5;
            }
        }

        .snowflake:nth-child(odd) {
            animation-duration: 8s;
            animation-delay: -4s;
        }

        .snowflake:nth-child(even) {
            animation-duration: 10s;
            animation-delay: -5s;
        }

        .snowflake:nth-child(3n) {
            animation-duration: 12s;
            animation-delay: -6s;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">
                <i class="fas fa-calendar-check me-2"></i>Absensi Karyawan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard"><i class="fas fa-home me-1"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/karyawan"><i class="fas fa-users me-1"></i>Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/absensi"><i class="fas fa-calendar-check me-1"></i>Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laporan"><i class="fas fa-chart-line me-1"></i>Laporan</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt me-1"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-4">

    <!-- Snowflakes -->
    <div class="snowflake" style="left: 10%;">❄️</div>
    <div class="snowflake" style="left: 20%;">❄️</div>
    <div class="snowflake" style="left: 30%;">❄️</div>
    <div class="snowflake" style="left: 40%;">❄️</div>
    <div class="snowflake" style="left: 50%;">❄️</div>
    <div class="snowflake" style="left: 60%;">❄️</div>
    <div class="snowflake" style="left: 70%;">❄️</div>
    <div class="snowflake" style="left: 80%;">❄️</div>
    <div class="snowflake" style="left: 90%;">❄️</div>
    <div class="snowflake" style="left: 15%;">❄️</div>
    <div class="snowflake" style="left: 25%;">❄️</div>
    <div class="snowflake" style="left: 35%;">❄️</div>
    <div class="snowflake" style="left: 45%;">❄️</div>
    <div class="snowflake" style="left: 55%;">❄️</div>
    <div class="snowflake" style="left: 65%;">❄️</div>
    <div class="snowflake" style="left: 75%;">❄️</div>
    <div class="snowflake" style="left: 85%;">❄️</div>
    <div class="snowflake" style="left: 95%;">❄️</div>
    <div class="snowflake" style="left: 5%;">❄️</div>
