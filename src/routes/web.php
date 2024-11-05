<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FavoriteController;

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

Route::get('/thank', [RegisterController::class, 'register_thanks']);
Route::get('/', [ShopController::class, 'shop_all']);
Route::get('/detail', [ShopController::class, 'description']);
   
Route::middleware('auth')->group(function () {
     Route::get('/my_page', [ShopController::class, 'book_list']);
    // Route::get('/done', [BookController::class, '']);
    // Route::get('/update_done', [BookController::class, '']);
});
