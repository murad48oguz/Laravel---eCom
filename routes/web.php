<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::get("/",[ProductController::class,'index']);

Route::get("search",[ProductController::class,'search']);

Route::get("detail/{id}",[ProductController::class,'detail']);

Route::get("removeItem/{id}",[ProductController::class,'removeItem']);

Route::get("ordernow",[ProductController::class,'orderNow']);

Route::get('/login',function(){
    return view('login');
});

Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::post("orderplace",[ProductController::class,'orderPlace']);


Route::post("/register",[UserController::class,'register']);

Route::view("/register",'register');


Route::post("/login",[UserController::class,'login']);

Route::get('/logout',function(){
    Session::forget('user');
    return redirect ('login');
});


















