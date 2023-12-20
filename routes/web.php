<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EcommerceController;



Route::get('/',[EcommerceController::class,'home'])->name('homePage');
Route::get('/about',[EcommerceController::class,'about'])->name('aboutPage');
Route::get('/content',[EcommerceController::class,'content'])->name('contentPage');
Route::get('/shop',[EcommerceController::class,'shop'])->name('shopPage');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('ecommerce.home');
    })->name('dashboard');

    Route::get('/checkout/{id}',[EcommerceController::class,'checkout'])->name('checkoutPage');
    Route::post('/checkout',[EcommerceController::class,'checkoutOrder'])->name('checkoutOrder');
    Route::post('/content',[EcommerceController::class,'contentData'])->name('content');
    Route::get('/success',[EcommerceController::class,'success'])->name('successPage');
    Route::get('/orderlist',[EcommerceController::class,'orderList'])->name('orderListPage');
    Route::get('/cart',[CartController::class,'cart'])->name('cartPage');
    Route::get('/addtocart/{id}',[CartController::class,'addToCart'])->name('addToCartPage');

   

    Route::group(['prefix'=>'admin','middleware'=>'admin_middleware'],function(){
        Route::get('/',[AdminController::class,'home'])->name('adminHome');
        Route::post('/create',[AdminController::class,'create'])->name('adminCreate');
        Route::get('/delete/{id}',[AdminController::class,'delete']);
        Route::get('/order',[AdminController::class,'order'])->name('adminOrder');
        Route::get('delete_order/{id}',[AdminController::class,'deleteOrder'])->name('deleteOrder');
    });
});
