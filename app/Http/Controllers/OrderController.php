<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Order\OrderQuery;
use App\Services\Order\OrderService;

class OrderController extends Controller
{
    //

    protected $orderService, $orderQuery;
    public function __construct()
    {
        $this->orderService = new OrderService;
        $this->orderQuery = new OrderQuery;
        // $this->middleware('jwt.verify');
    }
    public function getAllOrders()
    {
        $order = $this->orderQuery->getOrderAll();
        return response()->json($order,200);
    }
    public function getOrderByIdOrDate(Request $request)
    {
        $order = null;

        /*
        if($request->id !== null)
        { 
            $order = $this->orderQuery->getOrderById($request->id);
        }
        if($request->date_delivery !== null)
        {
            $order = $this->orderQuery->getOrderByDate($request->date_delivery);
        }
      */

        $id = -1;
       if($request->id)
       {
       	$id = $request->id;
       }else
       {
       	$id = -1;

       }
         $order = $this->orderQuery->getOrderByIdOrDate($id, $request->date_delivery);
       

        return response()->json($order,200);
       
    }
    public function getOrderByDate(Request $request)
    {

        
        

    }
    
  

}




