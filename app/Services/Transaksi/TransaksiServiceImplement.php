<?php

namespace App\Services\Transaksi;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Transaksi\TransaksiRepository;

class TransaksiServiceImplement extends ServiceApi implements TransaksiService{

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
     protected TransaksiRepository $mainRepository;

    public function __construct(TransaksiRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
