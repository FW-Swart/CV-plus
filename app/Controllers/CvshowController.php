<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;
use app\Models\UserModel;
use app\Models\WorkexpModel;
use app\Models\EducationModel;
use app\Models\PassionsModel;

$stylepick = 'cv';

require 'app/Helpers/StyleSwichHelper.php';

class CVshowController extends Controller
{
    public function index()
    {
        return View::render('cv-show/cv-show.view');
    }
}