<?php

namespace App\Services\Kegiatan;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Kegiatan\KegiatanRepository;

class KegiatanServiceImplement extends ServiceApi implements KegiatanService{

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
     protected KegiatanRepository $mainRepository;

    public function __construct(KegiatanRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
