<?php

namespace app\Models;

use app\Libraries\MySql;

class EducationModel extends Model
{
    // Name of the table
    protected $model = "education";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'user_id',
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

    // Select for CV-make views
    public static function getEducationByUser($user_id) 
    {   
        $sql = "SELECT * FROM `education` WHERE `user_id`=" . $user_id ;

        return MySql::query($sql);
    }
}

new EducationModel;