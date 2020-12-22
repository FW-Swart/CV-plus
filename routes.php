<?php

$router->define([

    ''=>'app/Controllers/IndexController.php',


    'invite'=>'app/Controllers/InviteController.php',

    'user'=>'app/Controllers/UserController.php',

    'register'=>'app/Controllers/RegisterController.php',
    

    'error404'=>'views/pages/error/error404.view.php'

]);