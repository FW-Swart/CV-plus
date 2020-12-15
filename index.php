<?php

    error_reporting(E_ALL);

    ini_set('error_reporting', E_ALL);

    require 'pp/router/Router.php';

    $router = new Router;

    require 'routes.php';

    require $router->direct($_SERVER['REQUEST_URI']);

?>