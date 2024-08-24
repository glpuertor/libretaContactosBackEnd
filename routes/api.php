<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('contactoF', [ContactoController::class, 'index']);
Route::post('contactosSearch', [ContactoController::class, 'index']);

Route::get('/contacto/{id}', [ContactoController::class, 'show']);

Route::delete('/contacto/{id}', [ContactoController::class, 'destroy']);

Route::post('/contacto', [ContactoController::class, 'store']);

Route::put('/contactoU/{id}', [ContactoController::class, 'update']);

Route::patch('/contactos/{id}', [ContactoController::class, 'updatePartial']);

Route::group(['prefix' => 'bulks', 'namespace' => 'App\Http\Controllers'], function () {
    Route::post('direccion/bulk', ['uses' => 'DireccionController@bulkStore']);
    Route::post('direccionUpdate/bulk', ['uses' => 'DireccionController@bulkStoreUpdate']);
});



/*
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('customer', [AuthController::class, 'customer']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('products', [ProductController::class, 'index']);
});
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request)){
    return $request->user();
}
*/
