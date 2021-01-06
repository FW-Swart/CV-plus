<?php

namespace app\Controllers;

$stylepick = 'main';

require 'app/Helpers/StyleSwichHelper.php';

// require 'views/pages/home.view.php';

use app\Core\View;
class HomeController extends Controller
{

    public function index()
    {
        return View::render('home.view');
    }
}