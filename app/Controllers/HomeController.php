<?php

namespace app\Controllers;

$stylepick = 'main';

require 'app/Helpers/StyleSwichHelper.php';

// require 'views/pages/home.view.php';

use app\Core\View;
class HomeController {

    public function index()
    {
        return View::render('home.view');
    }
}