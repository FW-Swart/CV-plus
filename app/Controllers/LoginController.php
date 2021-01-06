<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;

$stylepick = 'main';

require 'app/Helpers/StyleSwichHelper.php';
class LoginController extends Controller
{
    /**
     * Return the login view or,
     * when there's already a login session (user), then
     * redirect to he home page
     */
    public function index()
    {
        if (isset($_SESSION['user'])) {
            return View::redirect("cv-make");
        }

        return View::render('main/inlog-user.view');
    }

    /**
     * Check user credentials
     * This is a Ajax POST
     */
    public function login()
    {
        // $securityIssue = decryptToken($_REQUEST['crf_token'], $_SESSION['token']) === false;
        if (isset($_REQUEST['email']) && isset($_REQUEST['password']))
        // dd('email');

        {
            $sql = "SELECT * FROM `users` WHERE `email`='" . $_REQUEST['email'] . "'";
            $res = MySql::query($sql)->fetch();

            if ($res !== false && $res['role'] == 2)
            {
                if (password_verify($_REQUEST['password'], $res['password']))
                {
                    $this->setUserSession($res);

                    return json_encode([
                        'success'  => true,
                        'message'  => "Succesfull loged in.",
                        'redirect' => ""
                    ]);
                } else {
                    return json_encode([
                        'success' => false,
                        'message' => "Username and/or password incorrect"
                    ]);
                }
            } else {
                return json_encode([
                    'success' => false,
                    'message' => "Username and/or password incorrect."
                ]);    
            }
        }
    }
    /**
     * Write user data to SESSION
     */
    private function setUserSession($user) : void
    {
        $_SESSION['user'] = [
            'uid'        => $user['id'],
            'role'       => $user['role'],
            'first_name' => $user['first_name'],
            'insertion'  => $user['insertion'],
            'last_name'  => $user['last_name'],
            'full_name'  => $user['first_name'] . (!empty($user['insertion']) ? $user['insertion'] : "") . " " . $user['last_name'],
        ];
    }

}