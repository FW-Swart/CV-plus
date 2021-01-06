<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;

$stylepick = 'cv';

require 'app/Helpers/StyleSwichHelper.php';

class CVshowController extends Controller
{

    public function index()
    {
        return View::render('cv-show/cv-show.view');
    }

}