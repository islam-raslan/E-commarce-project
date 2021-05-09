<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customercontroler;
use App\Http\Controllers\admin;
use App\Http\Controllers\profileController;
use App\Http\Controllers\detailscontroller;
use App\Http\Controllers\adminDBcontroller;
use App\Http\Controllers\commentController;


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
    return view('home');
   }); 

Route::view('signup','logInPage');
Route::post('signup', [Customercontroler::class, 'AddCustomer']);
//Route::view('islam', 'islam');

Route::view('home','home');
Route::view('customer_login','CustomerLogIn');

//admin route
Route::post('admin/login',[admin::class,'login']);
Route::view('admin/login','adminLogeIn');


//sgin route
Route::post('customer_login',[Customercontroler::class,'coustomerLogin']);


//dashBord route
Route::view('adminDashbord','adminDashBord');
Route::get('adminDashbord',[adminDBcontroller::class,'show']);
Route::post('adminDashbord',[adminDBcontroller::class,'addData']);



//profile rout
Route::post('/profile/{id}',[profileController::class,'newupdate']);
Route::get('/profile/{id}',[profileController::class,'show']);



//details route 
Route::view('details','details');
//Route::get('/details',[detailscontroller::class,'show']);
Route::get('/details/{id}',[detailscontroller::class,'detail']);
Route::post('/details/{id}',[detailscontroller::class,'addToCartOrComment']);




    
