<?php

namespace App\Services\Client;


use App\Admin\Client;

/**
 * Comercio electronico desarrollado por camilo cetina 2021
 * clase para manejar el modelo de negocio del modulo cliente
 * 
 * 
*/
class ClientService
{
    protected $clientQuery,$model;

    public function __construct()
    {

        $this->model = new Client();
    }

    public function store($request)
    {
      
    }

}