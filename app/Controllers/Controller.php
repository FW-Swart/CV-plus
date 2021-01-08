<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;

class Controller
{

    protected function getRequest()
    {
        return $_SERVER;
    }

    public function __construct($function = null)
    {
        if (!empty($function)) {
            if (method_exists(get_class(), $function))
            {
                $this->$function();
            }
        }
    }

    public function logout()
    {
        session_destroy();
        session_regenerate_id('');

        return View::redirect("home");
    }

}