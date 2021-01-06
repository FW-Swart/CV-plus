<?php

namespace app\Controllers;

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

}