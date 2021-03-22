<?php

use Illuminate\Support\Facades\Route;
use App\Services\Order\OrderQuery;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/{app?}','welcome')->where('app','.*');
/*
Route::get('prueba',function(){
$order = new OrderQuery;
return $order->getOrderByIdOrDate(5,	
2020-03-29);
});

/*
