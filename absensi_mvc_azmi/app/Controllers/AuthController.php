<?php
class AuthController extends Controller {
    public function loginForm(){
        require __DIR__ . '/../Views/auth/login.php';
    }
    public function login(){
        $userModel = new User();
        $u = $userModel->findByUsername($_POST['username']);
        if($u && password_verify($_POST['password'], $u['password'])){
            $_SESSION['user'] = $u;
            $this->redirect('/dashboard');
        } else {
            echo "Login gagal";
        }
    }
    public function logout(){
        session_destroy();
        $this->redirect('/login');
    }
}