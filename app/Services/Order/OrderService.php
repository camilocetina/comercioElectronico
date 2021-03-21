<?php

namespace App\Services\Order;


use App\Admin\Order;

/**
 * Comercio electronico desarrollado por camilo cetina 2021
 * clase para manejar el modelo de negocio del modulo pedidos
 * 
 * 
*/
class OrderService
{
    protected $orderQuery,$model;

    public function __construct()
    {

        $this->model = new Order();
    }

    public function store($request)
    {
      
    }

}