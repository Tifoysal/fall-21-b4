<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Website\HomeController as WebsiteHomeController;
use App\Http\Controllers\Website\UserController;
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


Route::get('/',[WebsiteHomeController::class,'home'])->name('frontend.home');
Route::post('/user/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/user/login',[UserController::class,'userlogin'])->name('user.do.login');
Route::get('/user/logout',[UserController::class,'userlogout'])->name('user.logout');



//backend
// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });


Route::group(['prefix'=>'admin'],function (){
    Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/orders',[OrderController::class,'orderList'])->name('admin.order.list');
    Route::get('/products',[ProductController::class,'productList'])->name('admin.product.list');
    Route::get('/create/product',[ProductController::class,'create'])->name('product.create');  
    Route::post('/product/store',[ProductController::class,'store'])->name('admin.product.store');

    // category
    Route::get('/category/list',[CategoryController::class,'list'])->name('admin.category.list');
    Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('admin.category.form');
    Route::post('/category/add',[CategoryController::class,'categoryadd'])->name('category.add');

    // employee
    Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list');
    Route::get('/employee/form',[EmployeeController::class,'form'])->name('employee.create');
    Route::post('/employee/add',[EmployeeController::class,'store'])->name('employee.add');

    //admin panel user
    Route::get('/user/list',[AdminUserController::class,'userlist'])->name('admin.user.list');
});














