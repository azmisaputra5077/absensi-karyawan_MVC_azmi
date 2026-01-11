<?php
class Controller {
    public function view($view, $data=[]){
        View::render($view, $data);
    }
    public function redirect($url){
        header("Location: $url");
        exit;
    }
}