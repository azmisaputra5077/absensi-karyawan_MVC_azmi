<?php
class BaseModel {
    protected $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    // Tambahkan method generic untuk query dengan WHERE
    public function where($conditions = []) {
        if (empty($conditions)) {
            return $this->db->query("SELECT * FROM " . $this->getTableName())->fetchAll(PDO::FETCH_ASSOC);
        }

        $whereClauses = [];
        $params = [];

        foreach ($conditions as $key => $value) {
            $whereClauses[] = "$key = ?";
            $params[] = $value;
        }

        $where = implode(' AND ', $whereClauses);
        $table = $this->getTableName();

        $st = $this->db->prepare("SELECT * FROM $table WHERE $where");
        $st->execute($params);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    // Method untuk single query
    public function query($sql, $params = []) {
        $st = $this->db->prepare($sql);
        $st->execute($params);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get table name dari class name
    protected function getTableName() {
        // Konversi class name ke table name
        // Contoh: Absensi -> absensi
        return strtolower(get_class($this));
    }
}
