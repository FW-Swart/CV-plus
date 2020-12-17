<?php

namespace app\Controllers;

class IndexController
{
    public function index()
    {
        echo "indexcontroller.php bereikt";
    }
}

require 'views/pages/main/home.php';

?>