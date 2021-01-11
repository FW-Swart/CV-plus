<?php

namespace app\Models;

use app\Libraries\MySql;

class WorkexpModel extends Model
{
    // Name of the table
    protected $model = "workexp";

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
    public static function getWorkByUser($user_id) 
    {     
        $sql = "SELECT * FROM `workexp` WHERE `user_id`=" . $user_id ;

        return MySql::query($sql);
    }
}

new WorkexpModel;