<?php
class App {
    public function run(){
        $router = new Router();

        $router->get('/', 'AuthController@loginForm');
        $router->get('/login', 'AuthController@loginForm');
        $router->post('/login', 'AuthController@login');
        $router->get('/logout', 'AuthController@logout');

        $router->get('/dashboard', 'DashboardController@index', ['AuthMiddleware']);

        $router->get('/karyawan', 'KaryawanController@index', ['AuthMiddleware','RoleMiddleware:admin']);
        $router->get('/karyawan/create', 'KaryawanController@create', ['AuthMiddleware','RoleMiddleware:admin']);
        $router->post('/karyawan/store', 'KaryawanController@store', ['AuthMiddleware','RoleMiddleware:admin']);

        $router->get('/absensi', 'AbsensiController@index', ['AuthMiddleware']);
        $router->post('/absensi/store', 'AbsensiController@store', ['AuthMiddleware']);

        $router->get('/laporan', 'LaporanController@index', ['AuthMiddleware','RoleMiddleware:admin']);
        $router->get('/laporan/export', 'LaporanController@export', ['AuthMiddleware','RoleMiddleware:admin']);

        $router->dispatch();
    }
}