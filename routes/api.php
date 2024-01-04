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

Route::get('produk', 'App\Http\Controllers\ApiController@produk_index');
Route::post('produk', 'App\Http\Controllers\ApiController@produk_store');
Route::get('produk/{id}', 'App\Http\Controllers\ApiController@produk_by_id');
Route::patch('produk/{id}', 'App\Http\Controllers\ApiController@produk_update');
Route::delete('produk/{id}', 'App\Http\Controllers\ApiController@produk_delete');

Route::get('produk_form', 'App\Http\Controllers\ApiController@create_produk');
Route::post('produk_update/{id}', 'App\Http\Controllers\ApiController@produk_update');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
