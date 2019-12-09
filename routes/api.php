<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('orders', 'OrderController@index');
Route::get('orders/{order}', 'OrderController@show');
Route::get('orders/{status}/status', 'OrderController@ordersbystatus');
Route::get('orders/{name}/name', 'OrderController@ordersbyname');
Route::get('orders/{ordername}', 'OrderController@showbyname');
Route::post('orders', 'OrderController@store');
Route::put('orders/{order}', 'OrderController@update');
Route::delete('orders/{order}', 'OrderController@destroy');


Route::get('pizzas', 'PizzaController@index');
Route::get('pizzas/{pizza}', 'PizzaController@show');
Route::post('pizzas', 'PizzaController@store');
Route::put('pizzas/{pizza}', 'PizzaController@update');
Route::delete('pizzas/{pizza}', 'PizzaController@destroy');