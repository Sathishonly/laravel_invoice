<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invoice_Controller;

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



Route::get('/',[invoice_controller::class,'create']);
Route::post('/store',[invoice_controller::class,'store']);
Route::get('list',[invoice_controller::class,'list']);
Route::get('export',[invoice_controller::class,'export']);
