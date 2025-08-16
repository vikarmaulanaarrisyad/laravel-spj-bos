<?php

namespace App\Repositories\Sekolah;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Sekolah;

class SekolahRepositoryImplement extends Eloquent implements SekolahRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected Sekolah $model;

    public function __construct(Sekolah $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
