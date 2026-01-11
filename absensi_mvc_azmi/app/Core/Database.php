<?php
class Database {
    private static $instance = null;

    public static function getInstance(){
        if(self::$instance == null){

            $config = require __DIR__ . '/../../config/database.php';

            try {
                self::$instance = new PDO(
                    "mysql:host=".$config['host'].";dbname=".$config['dbname'].";charset=utf8",
                    $config['user'],
                    $config['pass'],
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                    ]
                );
            } catch (PDOException $e) {
                die("Koneksi database gagal: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
