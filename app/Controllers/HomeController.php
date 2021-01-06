<?php

namespace app\Controllers;

use app\Core\View;

$stylepick = 'main';

require 'app/Helpers/StyleSwichHelper.php';

class HomeController extends Controller
{

    public function index()
    {
        return View::render('home.view');
    }
    
}