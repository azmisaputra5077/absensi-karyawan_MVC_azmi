<?php
class Karyawan extends BaseModel {
    public function all(){
        return $this->db->query("SELECT * FROM karyawan")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($nama,$jabatan){
        $st = $this->db->prepare("INSERT INTO karyawan(nama,jabatan) VALUES(?,?)");
        $st->execute([$nama,$jabatan]);
    }
}