<?php

$router->get('', 'app/Controllers/HomeController.php@index');
$router->get('home', 'app/Controllers/HomeController.php');


$router->get('login', 'app/Controllers/LoginController.php');
$router->get('logout', 'App/Controllers/LoginController.php@logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login');


$router->get('register', 'app/Controllers/RegisterController.php');


$router->get('invite', 'app/Controllers/InviteController.php');


$router->get('cv-home-make', 'app/Controllers/CvmakeController.php');

$router->get('cv-home-show', 'app/Controllers/CvshowController.php');

$router->get('error404', 'app/Controllers/ErrorController.php');