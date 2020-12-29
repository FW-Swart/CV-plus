<?php

$router->get('', 'app/Controllers/IndexController.php');

$router->get('invite', 'app/Controllers/InviteController.php');

$router->get('user', 'app/Controllers/UserController.php');

$router->get('register', 'app/Controllers/RegisterController.php');

$router->get('cv-home-make', 'app/Controllers/CvmakeController.php');

$router->get('cv-home-show', 'app/Controllers/CvshowController.php');

$router->get('error404', 'app/Controllers/ErrorController.php');