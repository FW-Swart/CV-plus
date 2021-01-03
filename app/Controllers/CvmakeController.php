<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;

$stylepick = 'cv';

require 'app/Helpers/StyleSwichHelper.php';

// require 'views/pages/cv-make/cv-make-home.view.php';

class CVmakeController {


    public function __construct($function = null)
    {
        if (!empty($function)) {
            if (method_exists(get_class(), $function))
            {
                $this->$function();
            }
        }
    }

    public function index()
    {
        return View::render('cv-make/cv-make-home.view');
    }
}