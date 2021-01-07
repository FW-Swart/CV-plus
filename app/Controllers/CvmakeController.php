<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;

use app\Models\WorkexpModel;

$stylepick = 'cv';

require 'app/Helpers/StyleSwichHelper.php';

class CVmakeController extends Controller
{

    public function index()
    {

        // maybe this part should be in WorkexpModel
        $sql = "SELECT * FROM `workexp` WHERE `user_id`='" . $_SESSION['user']['uid'] . "'";
        $userWorkExp = MySql::query($sql)->fetchAll();

        // this part is on the right place ???
        $vars = [
            'workexp' => $userWorkExp
        ];

        return View::render('cv-make/cv-make.view', $vars );

    }
    
}