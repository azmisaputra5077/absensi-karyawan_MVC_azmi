<?php
class AbsensiController extends Controller {
    public function index(){
        $a = new Absensi();
        $k = new Karyawan();
        $this->view('auth/absensi/index', ['data'=>$a->all(),'karyawan'=>$k->all()]);
    }
    public function store(){
        $a = new Absensi();
        $existing = $a->findByKaryawanAndDate($_POST['karyawan_id'], $_POST['tanggal']);
        if($existing){
            echo "Karyawan sudah absen pada tanggal tersebut.";
            return;
        }
        (new Absensi())->create($_POST['karyawan_id'], $_POST['tanggal'], $_POST['status']);
        $this->redirect('/absensi');
    }
}