<?php

namespace app\Controllers;

use app\Models\UserModel;
use app\Core\View;
use App\Libraries\MySql;
class UserController extends Controller
{

    public function index()
    {
        $users = UserModel::all();
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}

