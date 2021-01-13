<?php

$router->get('', 'app/Controllers/HomeController.php@index');
$router->get('home', 'app/Controllers/HomeController.php');

$router->get('logout', 'app/Controllers/Controller.php@logout');

$router->get('login', 'app/Controllers/LoginController.php');
$router->post('login/auth', 'app/Controllers/LoginController.php@login');

$router->get('invite', 'app/Controllers/InviteController.php');
$router->post('invite/auth', 'app/Controllers/InviteController.php@login');

$router->get('register', 'app/Controllers/RegisterController.php@index');
$router->post('register', 'app/Controllers/RegisterController.php@store');

$router->get('cv-make', 'app/Controllers/CvmakeController.php@index');
$router->post('cv-make/new', 'app/Controllers/CvmakeController.php@new');
$router->post('cv-make/edit', 'app/Controllers/CvmakeController.php@edit');
$router->post('cv-make/delete', 'app/Controllers/CvmakeController.php@delete');


$router->get('cv-show', 'app/Controllers/CvshowController.php');

$router->get('error404', 'app/Controllers/ErrorController.php');