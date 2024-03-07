<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('products/', [ProductController::class, 'index'])->name('products');
Route::post('products/create', [ProductController::class, 'create'])->name('create.product');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('edit.product');
Route::post('products/{id}/update', [ProductController::class, 'update'])->name('update.products');
Route::delete('products/{id}/delete', [ProductController::class, 'destroy'])->name('delete.product');

//user
Route::post('products/add', [OrderController::class, 'addProductUser'])->name('addProductUser');
Route::get('order/user', [OrderController::class, 'getOrderUser'])->name('getOrderUser');


//producs
Route::get('products/category', [CategoryController::class, 'index'])->name('category.products');
Route::get('products/viewProduct', [ProductController::class, 'products'])->name('view.products');
Route::delete('products/delete/order/{user_id}/{id}',[ProductController::class,'destroyToOrder'])->name('delete.product.order');

Route::get('users/{id}', [OrderController::class, 'index']);
