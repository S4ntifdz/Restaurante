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
    
    Route::apiResource('Orders', OrderController::class);
    Route::post('Orders/{table_id}/items', [OrderController::class, 'addItems']);
    Route::get('Orders/{id}/tables', [OrderController::class, 'tables']);

    Route::apiResource('Items', ItemController::class);
    Route::get('Items/{id}', [ItemController::class]);

    Route::apiResource('Menus', MenuController::class);
    Route::get('Menus/{id}/items', [MenuController::class, 'items']);

    Route::apiResource('Tables', TableController::class);
    Route::get('Tables/{id}/orders', [TableController::class, 'orders']);

});