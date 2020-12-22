<?php

require 'app/Core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());
