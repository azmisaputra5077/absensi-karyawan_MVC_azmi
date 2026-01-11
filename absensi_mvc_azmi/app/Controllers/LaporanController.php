<?php
class LaporanController extends Controller {
    public function index(){
        $a = new Absensi();
        $this->view('laporan/index', ['data'=>$a->all()]);
    }
    public function export(){
        $a = new Absensi();
        $data = $a->all();
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="laporan_absensi.csv"');
        
        $output = fopen('php://output', 'w');
        fputcsv($output, ['Nama', 'Tanggal', 'Status']);
        
        foreach($data as $row){
            fputcsv($output, [$row['nama'], $row['tanggal'], $row['status']]);
        }
        
        fclose($output);
        exit;
    }
}