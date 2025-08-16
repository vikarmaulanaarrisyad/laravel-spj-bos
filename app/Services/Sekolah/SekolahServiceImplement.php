<?php

namespace App\Services\Sekolah;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Sekolah\SekolahRepository;

class SekolahServiceImplement extends ServiceApi implements SekolahService{

    /**
     * set title message api for CRUD
     * @param string $title
     */
     protected string $title = "";
     /**
     * uncomment this to override the default message
     * protected string $create_message = "";
     * protected string $update_message = "";
     * protected string $delete_message = "";
     */

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected SekolahRepository $mainRepository;

    public function __construct(SekolahRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
