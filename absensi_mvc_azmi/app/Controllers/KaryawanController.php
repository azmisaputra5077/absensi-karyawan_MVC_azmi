<?php
class KaryawanController extends Controller {
    public function index(){
        $m = new Karyawan();
        $this->view('karyawan/index', ['data'=>$m->all()]);
    }
    public function create(){
        $this->view('karyawan/create');
    }
    public function store(){
        (new Karyawan())->create($_POST['nama'], $_POST['jabatan']);
        $this->redirect('/karyawan');
    }
}