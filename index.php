<?php

require 'core/bootstrap.php';

require 'core/Router.php';
  
$router = new Router;

var_dump ($router);

require 'routes.php';

$uri = (trim($_SERVER['REQUEST_URI'], '/'));

var_dump ($_SERVER['REQUEST_URI']);

var_dump ($uri);

// !! hier gaatie plat !!
require $router->direct('$uri');