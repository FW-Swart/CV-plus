<?php

class Router

{

    protected $routes = [];

        function __construct($routes)
        {

            $this->routes = $routes;

        }

    public static function load($file)

    {

        require $file;

        $router = new self($routes);

        return $router;

    }


    public function direct($uri)

    {

        if (array_key_exists($uri, $this->routes)) {

            return $this->routes[$uri];

        }

        // throw new Exception ('no route for uri');

    }



}