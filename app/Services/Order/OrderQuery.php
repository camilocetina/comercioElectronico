<?php
namespace App\Services\Order;


use App\Admin\Order;
use \Carbon\Carbon;
/**
 * Comercio electronico desarrollado por camilo cetina 2021
 * clase para manejar el modelo de negocio del modulo pedidos
 * 
 * 
*/

class OrderQuery{


	 protected $order;


    public function __construct()
    {
        $this->order = new Order();
    }

    public function getOrderAll()
    {
        return $this->order->all();
    }
    
    public function getOrderById($id)
    {
        return $this->order->where('id','LIKE','%'.$id.'%')->get();
    }
     public function getOrderByDate($date)
    {

        $newDate = Carbon::parse($date);
        $otherDate = $newDate->format("Y-m-d");

        return $this->order->whereDate('dateDelivery','=',$otherDate)->get();
       
    }

}