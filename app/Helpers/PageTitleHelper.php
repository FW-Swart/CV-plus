<?php 

switch (trim($_SERVER['REQUEST_URI'], '/')) {

    case '':
        $pagetitle = 'CV-plus Home page'; 
        break;
    case 'invite':
        $pagetitle = 'Welcome Invite';
        break;
    case 'user':
        $pagetitle = 'User InLog';
        break;
    case 'register':
        $pagetitle = 'New User Register';
        break;

    case 'error404':
        $pagetitle = 'ERROR-404';
        break;


    default:
        $pagetitle = "CV-plus SITE";

}

?>
