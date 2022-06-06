<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;

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

Route::resource('categories', 'CategoryController')->names('categories');
Route::resource('clients', 'ClientController')->names('categories');
Route::resource('products', 'ProductController')->names('products');
Route::resource('providers', 'ProviderController')->names('providers');
Route::resource('purchases', 'PurchaseController')->names('purchases');
Route::resource('sales', 'SaleController')->names('sales');

Route::get('/prueba', function () {
    return view('prueba');
});