<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('dashboard');
});


Route::group(['prefix'=>'admin'],function (){
    Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/orders',[OrderController::class,'orderList'])->name('admin.order.list');
    Route::get('/products',[ProductController::class,'productList'])->name('admin.product.list');
    Route::get('/create/product',[ProductController::class,'create'])->name('product.create');
});














