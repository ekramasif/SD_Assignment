<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

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

Route::get('product', [ProductController::class,'product']);
Route::post('insert-product',[ProductController::class,'createproduct']);
Route::get('get-product/{id}',[ProductController::class,'getProductById']);
Route::post('push-product/{id}',[ProductController::class,'updateProduct']);