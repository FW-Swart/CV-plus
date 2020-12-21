<?php

require 'app/Core/bootstrap.php';
// require 'vendor/autoload.php';

require Router::load('routes.php')
    ->direct(Request::uri());
