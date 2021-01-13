<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;
use app\Models\Model;
use app\Models\UserModel;
use app\Models\WorkexpModel;
use app\Models\EducationModel;
use app\Models\PassionsModel;

$stylepick = 'cv';

require 'app/Helpers/StyleSwichHelper.php';

class CVmakeController extends Controller
{
    
    // public $vars;

    
    public function index()
    {
        
        $user = UserModel::getDetailsUser($_SESSION['user']['uid']);

        $userWorkExp = WorkexpModel::getWorkByUser($_SESSION['user']['uid']);

        $userEducation = EducationModel::getEducationByUser($_SESSION['user']['uid']);

        $userPassions = PassionsModel::getPassionByUser($_SESSION['user']['uid']);
    
        $vars = [
            'users' => $user,
            'workexp' => $userWorkExp,
            'education' => $userEducation,
            'passions' => $userPassions
        ];

       
        return View::render('cv-make/cv-make.view', $vars);
    }

    // create a form based on current table headrs from tab
    public function createForm()
    {

        
        // dd($result);
        // make html form from current table in view with empty fields

    }

    // Store a new record 
    public function new()
    {
        dd('we zijn bij new');
        // createForm functie met lege velden
        //  -> functie is er al om toe te voegen als new

        // message new record created

        // return refresh of current view

    }

    // Updates a record 
    public function edit()
    {

        
        dd('we zijn bij edit');
        // createForm functie met velden van current table/row
        // get current row = html form -> functie modify current table/row
        
    }

    // Archive a record 
    public function delete()
    {
        
        dd('we zijn bij delete');
        // show fields current table/row which will be removed
        // do toby's destroy funtion for current table/row

    }

}