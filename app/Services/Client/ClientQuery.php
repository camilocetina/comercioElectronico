<?php

namespace App\Services\Client;

use App\Admin\Client;

/**
 * Comercio electronico desarrollado por camilo cetina 2021
 * clase para manejar el modulo de cliente
 * 
 * 
*/
class ClientQuery

{
    protected $client;


    public function __construct()
    {
        $this->client = new Client();
    }

    public function getClientAll()
    {
        return $this->client->all();
    }
    
    public function getClientById($id)
    {
        return $this->client->findOrFail($id);
    }
}