<?php

class Router

{

    protected $routes = [];

    public function GoInside ($routes)

    {

        $this->routes = $routes;

    }

    public function direct($uri)

    {

        if (array_key_exists($uri, $this->routes)) {

            return $this->routes[$uri];

        }

        throw new Exception ('no route for uri');

    }



}

