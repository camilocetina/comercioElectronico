<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Inventory\InventoryQuery;
class InventoryController extends Controller
{
    //

      protected $inventoryQuery;
    public function __construct()
    {
      
        $this->inventoryQuery = new InventoryQuery;
        // $this->middleware('jwt.verify');
    }
  public function getAllInventory()
    {
        $order = $this->inventoryQuery->getInventoryAll();
        return response()->json($order,200);
    }
}
