<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MultiController;
use App\Http\Controllers\ProductController;

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

//CRUD
Route::get('employees', [EmployeeController::class, 'index']);
Route::get('create-employee', [EmployeeController::class, 'create']);
Route::post('store-employee', [EmployeeController::class, 'store']);
Route::get('edit-employee/{id}', [EmployeeController::class, 'edit']);
Route::post('update-employee/{id}', [EmployeeController::class, 'update']);
Route::get('delete-employee/{id}', [EmployeeController::class, 'delete']);

//Auth
Route::get('login', [AuthController::class, 'login']);
Route::post('storelogin', [AuthController::class, 'loginstore']);

Route::middleware(['checkloggedin'])->group(function () {
    Route::get('dashboard', [AuthController::class,'dashboard']);
});
Route::get('logout', [AuthController::class,'logout']);


//layouts
 Route::middleware(['checkloggedin' , 'isadmin'])->group(function () {
     Route::get('admin', [AuthController::class,'admin']);
 });
 Route::middleware(['checkloggedin' , 'isother'])->group(function () {
     Route::get('other', [AuthController::class,'other']);
 });


 //Image
Route::get('upload', [UploadController::class,'upload']);
Route::post('uploadimage', [UploadController::class,'uploadimage']);

//Multi
Route::get('multi',[MultiController::class,'create']);
Route::post('multi',[MultiController::class,'store']);

//Datatable Product
Route::get('products', [ProductController::class, 'all']);