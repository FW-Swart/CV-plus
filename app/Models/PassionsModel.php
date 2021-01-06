<?php

namespace app\Models;

use app\Libraries\MySql;

class PassionsModel extends Model
{
    // Name of the table
    protected $model = "passions";

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

    // function set user id record for session user

}

new PassionsModel;