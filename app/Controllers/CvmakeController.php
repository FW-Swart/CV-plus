<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;

$stylepick = 'cv';

require 'app/Helpers/StyleSwichHelper.php';

// require 'views/pages/cv-make/cv-make-home.view.php';

class CVmakeController extends Controller
{

    public function index()
    {
        return View::render('cv-make/cv-make.view');
    }
}