<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers' ],function(){
    
    Route::apiResource('orders', OrderController::class);
    Route::post('orders/{table_id}/items', [OrderController::class, 'addItems']);
    Route::get('orders/{id}/tables', [OrderController::class, 'tables']);

    Route::apiResource('menuitems', ItemController::class);
    Route::get('menuitems/{id}', [ItemController::class]);

    Route::apiResource('menus', MenuController::class);
    Route::get('menus/{id}/items', [MenuController::class, 'items']);

    Route::apiResource('tables', TableController::class);
    Route::get('tables/{id}/orders', [TableController::class, 'orders']);

});