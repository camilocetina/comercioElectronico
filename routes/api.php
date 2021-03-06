<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace'=>'Api'],function(){
    Route::post('login','AuthController@login');
    // Route::post('logout','AuthController@register');
    Route::post('logout','AuthController@logout');
    Route::post('register','AuthController@register');
    Route::post('checkToken','AuthController@checkToken');

    /**
     * 
     * Admin routes
     * 
    */
    Route::post('admin','AdminController@index');

    Route::post('search','OrderController@searchOrderByIdOrDate');


});
    /**
     * 
     * Orders route
     * 
    */
      //  Route::post('search','OrderController@searchOrderByIdOrDate');

    Route::post('pedidos','OrderController@getOrderByIdOrDate');
    Route::get('pedidos/todos','OrderController@getAllOrders');
     Route::get('inventario/todos','InventoryController@getAllInventory');

