<?php

use app\Core\Router;
use app\Core\Request;

require 'app/Core/bootstrap.php';

$route = Router::load('routes.php')->direct(Request::uri(), Request::method());
require $route['uri'];
$class = new $route['class'];
$function = $route['function'];


if (!Request::ajax())
{
    // Load the HTML header
    require 'views/partials/head.php';
    // require 'views/partials/header-brand.php';

    // Inject code from controller
    echo $class->$function();

    // Close it with the bottom end </body> and </html> tags
    require 'views/partials/footer-brand.php';

    require 'views/partials/bottom.php';

} else {

    echo $class->$function();
    
}
