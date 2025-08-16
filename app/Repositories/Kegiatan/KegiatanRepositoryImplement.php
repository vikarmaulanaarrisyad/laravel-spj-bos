<?php

namespace App\Repositories\Kegiatan;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Kegiatan;

class KegiatanRepositoryImplement extends Eloquent implements KegiatanRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected Kegiatan $model;

    public function __construct(Kegiatan $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
