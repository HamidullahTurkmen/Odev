<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\birlestirme;
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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/newpage', function () {
    return view('newpage');
});*/

/*Route::get('/newpage','HomeController@showVisible');*/
Route::get('/newpage',[HomeController::class,'showVisible']);

Route::get('/urunler',[HomeController::class,'urunler']);
Route::get('/user_products',[HomeController::class,'user_product']);
Route::get('/birlestirme',[HomeController::class,'birlestirme']);
Route::get('/create-product',[ProductController::class,'create'])->name('product.create');
Route::get('/save-product',[ProductController::class,'store'])->name('product.save');
Route::get('/show-product',[ProductController::class,'index']);
