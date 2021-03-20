<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Services\Client\ClientQuery;
use App\Services\Client\ClientService;

class ClientController extends Controller
{
    protected $clientService, $clientQuery;
    public function __construct()
    {
        $this->clientService = new ClientService;
        $this->clientQuery = new ClientQuery;
    }
    
    public function getClientById($id)
    {
        $client = $this->clientQuery->getClientById($id);
    }
    public function store(ClientRequest $request)
    {
        $this->clientService($request);
    }
}
