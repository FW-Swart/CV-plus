<?php

namespace app\Controllers;

class Controller
{

    protected function getRequest()
    {
        return $_SERVER;
    }

}