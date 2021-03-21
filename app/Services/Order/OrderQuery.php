<?php
namespace App\Services\Order;


use App\Admin\Order;

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
        return $this->order->findOrFail($id);
    }
     public function getOrderByIdOrDate($id,$date)
    {
        return $this->order->where('id','LIKE',$id)->orwhere('dateDelivery','LIKE',$date)->get();
    }

}