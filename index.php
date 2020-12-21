<?php

require 'app/Core/bootstrap.php';

// $router = new Router;

// require 'routes.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// require $router->direct($uri);

// $uri = trim($_SERVER['REQUEST_URI'], '/');

require Router::load('routes.php')
    ->direct(Request::uri());

// var_dump($uri);

// require 'views/pages/home.view.php';

// require 'views/pages/main/admin.view.php';

// require 'views/pages/error/error404.view.php';