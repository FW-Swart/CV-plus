<?php

namespace app\Models;

class RolesModel extends Model
{
    // Name of the table
    protected $model = "role";

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->protectedFields
        );
    }

}

new RolesModel;