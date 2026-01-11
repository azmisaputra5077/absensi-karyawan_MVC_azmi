<?php
class RoleMiddleware {
    public function handle($role){
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != $role){
            echo "Akses ditolak!";
            exit;
        }
    }
}