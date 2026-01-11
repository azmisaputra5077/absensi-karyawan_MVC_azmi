<?php

class DashboardController extends Controller {
    public function index(){
        $user = $_SESSION['user'];
        $karyawanModel = new Karyawan();
        $absensiModel = new Absensi();

        $totalKaryawan = count($karyawanModel->all());
        $absensiHariIni = count($absensiModel->query("SELECT * FROM absensi WHERE DATE(tanggal) = CURDATE()"));
        $tanggalHariIni = date('d/m/Y');

        $this->view('dashboard', compact('user', 'totalKaryawan', 'absensiHariIni', 'tanggalHariIni'));
    }
}
