<?php

namespace app\Controllers;

use app\Models\UserModel;
use app\Models\RolesModel;
use app\Core\View;
use app\Libraries\MySql;

class AdminController extends Controller
{

    // Show all tables / records 
    public function index()
    {
        // check if admin user is loged in
         $user = $_SESSION['user'];
         $role = $_SESSION['role'];
        if ($role = 1 && $user !== false) {
            
        // 1 functie laden alle bestaande tabellen -> tabel naam is laden this tabel
        $users = UserModel::all();
        $roles = RolesModel::all();

        return View::redirect("admin/logedin");

        }else {

        session_destroy();

        return View::redirect("home");

        }
        
    }

    // Store a record 
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

