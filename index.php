<?php

require 'core/bootstrap.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Router::load('routes.php')

//     ->direct(Request::uri(), Request::method());

// $router = new Router;

// require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');

var_dump($uri);
// var_dump($_SERVER);

$router = Router::load('routes.php');

// require $router->direct('');
require $router->direct($uri);

