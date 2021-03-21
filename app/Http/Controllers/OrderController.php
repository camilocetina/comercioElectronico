<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Client\OrderQuery;
use App\Services\Client\OrderService;
class OrderController extends Controller
{
    //

    protected $orderService, $orderQuery;
    public function __construct()
    {
        $this->orderService = new OrderService;
        $this->orderQuery = new OrderQuery;
    }
    public function searchOrderByIdOrDate($id,$date)
    {
        $order = $this->orderQuery->getOrderByIdOrDate($id,$date);
    }
    
  

}




