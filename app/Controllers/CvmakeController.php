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

        $sql = "SELECT * FROM `workexp` WHERE `user_id`='" . $_SESSION['user']['uid'] . "'";
        $userworkexp = MySql::query($sql)->fetchAll();

        if (count($userworkexp) != 0 )
        {
            // make tabel tab content voor site
            foreach ($userworkexp as $workexp)
            {
             
                echo '<tr>';
                echo '<td>'.$workexp['id'].'</td>';
                echo '</tr>';

            }

            // dd($userworkexp);

        } else {

            dd('jammerdan geen werk ervaring');

        }

        return View::render('cv-make/cv-make.view');

    }
    
}