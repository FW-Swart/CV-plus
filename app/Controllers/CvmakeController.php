<?php

namespace app\Controllers;

use app\Core\View;
use app\Models\UserModel;
use app\Models\WorkexpModel;
use app\Models\EducationModel;
use app\Models\PassionsModel;

$stylepick = 'cv';

require 'app/Helpers/StyleSwichHelper.php';

class CVmakeController extends Controller
{
    public function index()
    {
        $user = UserModel::get($_SESSION['user']['uid']);

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
}