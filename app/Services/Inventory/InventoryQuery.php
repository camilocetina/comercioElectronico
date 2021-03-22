<?php
namespace App\Services\Inventory;


use App\Admin\Inventory;
use \Carbon\Carbon;

/**
 * Comercio electronico desarrollado por camilo cetina 2021
 * clase para manejar el modelo de negocio del modulo inventario
 * 
 * 
*/

class InventoryQuery{


	 protected $inventory;


    public function __construct()
    {
        $this->inventory = new Inventory();
    }

    public function getInventoryAll()
    {
        return $this->inventory->all();
    }
    
  

}