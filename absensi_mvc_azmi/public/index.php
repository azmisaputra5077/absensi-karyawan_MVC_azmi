<?php
require_once __DIR__ . '/../app/Core/App.php';
require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Core/Controller.php';
require_once __DIR__ . '/../app/Core/Database.php';
require_once __DIR__ . '/../app/Core/View.php';

spl_autoload_register(function($class){
    $paths = [
        __DIR__ . '/../app/Controllers/' . $class . '.php',
        __DIR__ . '/../app/Models/' . $class . '.php',
        __DIR__ . '/../app/Middlewares/' . $class . '.php',
        __DIR__ . '/../app/Core/' . $class . '.php',
    ];
    foreach($paths as $p){
        if(file_exists($p)) require_once $p;
    }
});

session_start();

$app = new App();
$app->run();