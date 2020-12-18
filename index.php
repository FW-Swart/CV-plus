<?php

require 'app/Core/bootstrap.php';



require Router::load('routes.php')
    ->direct(Request::uri());

// var_dump ($_SERVER['REQUEST_URI']);

// var_dump ($uri);

