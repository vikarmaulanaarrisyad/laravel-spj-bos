<?php

namespace App\Repositories\Pencairan;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Pencairan;

class PencairanRepositoryImplement extends Eloquent implements PencairanRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected Pencairan $model;

    public function __construct(Pencairan $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
