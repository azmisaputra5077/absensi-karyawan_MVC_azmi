<?php
class Absensi extends BaseModel {
    public function all(){
        return $this->db->query("SELECT k.nama, a.tanggal, a.status FROM absensi a JOIN karyawan k ON a.karyawan_id = k.id")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($karyawan_id, $tanggal, $status){
        $st = $this->db->prepare("INSERT INTO absensi(karyawan_id, tanggal, status) VALUES(?, ?, ?)");
        $st->execute([$karyawan_id, $tanggal, $status]);
    }

    public function findByKaryawanAndDate($karyawan_id, $tanggal){
        $st = $this->db->prepare("SELECT * FROM absensi WHERE karyawan_id = ? AND tanggal = ?");
        $st->execute([$karyawan_id, $tanggal]);
        return $st->fetch(PDO::FETCH_ASSOC);
    }
}
