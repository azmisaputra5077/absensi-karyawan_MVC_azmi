<?php
class Router {
    private $routes = ['GET'=>[], 'POST'=>[]];

    public function get($uri, $action, $middlewares=[]){
        $this->routes['GET'][$uri] = ['action'=>$action,'middlewares'=>$middlewares];
    }
    public function post($uri, $action, $middlewares=[]){
        $this->routes['POST'][$uri] = ['action'=>$action,'middlewares'=>$middlewares];
    }

    public function dispatch(){
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if(!isset($this->routes[$method][$uri])){
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        $route = $this->routes[$method][$uri];

        foreach($route['middlewares'] as $mw){
            if(strpos($mw, ':') !== false){
                [$mwClass,$param] = explode(':',$mw);
                (new $mwClass)->handle($param);
            } else {
                (new $mw)->handle();
            }
        }

        [$controller,$methodAction] = explode('@', $route['action']);
        (new $controller)->$methodAction();
    }
}