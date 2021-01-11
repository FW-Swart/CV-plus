<?php

namespace app\Controllers;

use app\Core\View;
use app\Libraries\MySql;
use app\Models\UserModel;
use app\Models\RolesModel;

class AdminController extends Controller
{

    // Show all existing tables / records 
    public function index()
    {
        // check if admin user is loged in
         $useradmin = $_SESSION['user'];
         $roleadmin = $_SESSION['role'];

        if ($roleadmin = 1 && $useradmin !== false) {
            
        // 1 functie laden alle bestaande tabellen -> tabel naam is laden this tabel

        return View::redirect("admin/logedin");

        }else {

            session_destroy();

            return View::redirect("home");

        } 
    }

    // Store a new record 
    public function store()
    {
        
    }

    // Updates a record 
    public function update()
    {
        
    }

    // Archive a record 
    public function destroy()
    {

    }
}