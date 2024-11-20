<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisterController;
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

// Route::get('/thank', [RegisterController::class, 'register_thanks']);
// Route::get('/login', [RegisterController::class, 'login_page']);
Route::get('/', [ShopController::class, 'shop_all']);
Route::post('/', [ShopController::class, 'shop_search']);
Route::get('/detail', [ShopController::class, 'description']);
   
Route::middleware('auth')->group(function () {
    Route::post('/book', [BookController::class, 'book_create']);
    Route::get('/done', [BookController::class, 'book_done']);
    Route::get('/my_page', [BookController::class, 'book_list']);
    Route::delete('/book_delete', [BookController::class, 'book_delete']);
    Route::post('/favorite', [FavoriteController::class, 'favorite']);
    Route::delete('/favorite_delete', [FavoriteController::class, 'favorite_destory']);
    Route::patch('/edit', [BookController::class, 'book_update']);
});
