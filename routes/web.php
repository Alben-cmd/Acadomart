<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Models\Business;

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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/business/{slug}', [FrontController::class, 'show'])->name('show.business');
Route::get('/product', [FrontController::class, 'product'])->name('product');




Auth::routes();

// Admin Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([], function(){
    // Business Routes
    Route::get('/businesses', [BusinessController::class, 'index'])->name('businesses');
    Route::get('/add-business', [BusinessController::class, 'create'])->name('add.business');
    Route::post('/add-business', [BusinessController::class, 'store'])->name('store.business');
    Route::get('/edit-business/{slug}', [BusinessController::class, 'edit'])->name('edit.business');
    Route::post('/edit-business/{slug}', [BusinessController::class, 'update'])->name('update.business');
    Route::get('/enable-business/{slug}', [BusinessController::class, 'enable'])->name('enable.business');
    Route::get('/disable-business/{slug}', [BusinessController::class, 'disable'])->name('disable.business');


    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/add-product', [ProductController::class, 'create'])->name('add.product');
    Route::post('/add-product', [ProductController::class, 'store'])->name('store.product');
    Route::get('/edit-product/{slug}', [ProductController::class, 'edit'])->name('edit.product');
    Route::post('/edit-product/{slug}', [ProductController::class, 'update'])->name('update.product');
    Route::get('/enable-product/{slug}', [ProductController::class, 'enable'])->name('enable.product');
    Route::get('/disable-product/{slug}', [ProductController::class, 'disable'])->name('disable.product');
});
