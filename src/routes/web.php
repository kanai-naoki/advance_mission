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
Route::post('/', [ShopController::class, 'shop_search']);
Route::get('/detail', [ShopController::class, 'description']);
   
Route::middleware('auth')->group(function () {
    Route::post('/book', [BookController::class, 'book_create']);
    Route::get('/my_page', [ShopController::class, 'book_list']);
    Route::post('/book_delete', [BookController::class, 'book_delete']);
    Route::post('/favorite', [FavoriteController::class, 'favorite_create']);
    Route::post('/favorite_delete', [BookController::class, 'favorite_remove']);
    // 予約内容編集機能
    Route::post('/edit', [BookController::class, 'book_update']);
});
