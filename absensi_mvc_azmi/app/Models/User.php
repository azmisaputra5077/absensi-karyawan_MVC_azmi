<?php
class User extends BaseModel {
    public function findByUsername($u){
        $st = $this->db->prepare("SELECT * FROM users WHERE username=?");
        $st->execute([$u]);
        return $st->fetch(PDO::FETCH_ASSOC);
    }
}