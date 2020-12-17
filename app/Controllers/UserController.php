<?php

namespace app\Controllers;

class UserController
{
    public function index()
    {
        echo "UserController.php bereikt";
    }
}

require 'views/pages/main/user.php';

?>