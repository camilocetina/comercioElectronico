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
        return $this->order->select('orders.id', 'orders.client_id','orders.product_id','orders.value','orders.cant','orders.dateDelivery','orders.priority',  'orders.state','inventories.amount')->join('inventories', 'orders.product_id', '=', 'inventories.product_id')->get();
    }
    
    public function getOrderById($id)
    {
        return $this->order->select('orders.id', 'orders.client_id','orders.product_id','orders.value','orders.cant','orders.dateDelivery','orders.priority',  'orders.state','inventories.amount')->where('orders.id','LIKE','%'.$id.'%')->join('inventories', 'orders.product_id', '=', 'inventories.product_id')->get();
    }

    public function getOrderByIdOrDate($id,$date)
    {
        $newDate = Carbon::parse($date);
        $otherDate = $newDate->format("Y-m-d");

        return $this->order->select('orders.id', 'orders.client_id','orders.product_id','orders.value','orders.cant','orders.dateDelivery','orders.priority',  'orders.state','inventories.amount')->where('orders.id','LIKE','%'.$id.'%')->orWhere('dateDelivery','=',$otherDate)->join('inventories', 'orders.product_id', '=', 'inventories.product_id')->get();

     

    }
     public function getOrderByDate($date)
    {

        $newDate = Carbon::parse($date);
        $otherDate = $newDate->format("Y-m-d");

        return $this->order->whereDate('dateDelivery','=',$otherDate)->get();
       
    }

}