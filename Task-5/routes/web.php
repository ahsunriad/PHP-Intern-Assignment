<?php

use Illuminate\Support\Facades\Route;
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
    return view('index');
});
Route::get('addProduct', [ProductController::class, 'show']);
Route::post('addProduct', [ProductController::class, 'store']);
Route::get('products', [ProductController::class, 'index']);
Route::get('editProduct/{id}', [ProductController::class, 'edit']);
Route::put('updateProduct/{id}', [ProductController::class, 'update']);
Route::get('deleteProduct/{id}', [ProductController::class, 'destroy']);
