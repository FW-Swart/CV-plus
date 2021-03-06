<?php

namespace app\Models;

use app\Libraries\MySql;

class UserModel extends Model
{
    // Name of the table
    protected $model = "user";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'role',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields
        );
    }

    public static function exists($email, int $id = null)
    {
        $query = "SELECT id FROM `users` WHERE `email`='" . $email . $id !== null ? " AND id<>" . $id : "";
        $result = MySql::query($query)->fetch();

        return $result !== false;
    }

    public static function setUserSession(array $data)
    {
        $_SESSION['user'] = [
            'id'         => $data['id'],
            'role'       => $data['role'],
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'full_name'  => $data['first_name'] . " " . $data['last_name'],
        ];
    }

    // Select for CV-make views
    public static function getDetailsUser($user_id) 
    {     
        $sql = "SELECT * FROM `users` WHERE `id`=" . $user_id ;

        return MySql::query($sql);
    }

}

new UserModel;