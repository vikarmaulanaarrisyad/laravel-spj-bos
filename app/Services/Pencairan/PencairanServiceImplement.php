<?php

namespace App\Services\Pencairan;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Pencairan\PencairanRepository;

class PencairanServiceImplement extends ServiceApi implements PencairanService{

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
     protected PencairanRepository $mainRepository;

    public function __construct(PencairanRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
