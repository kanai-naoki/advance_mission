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

Route::get('/', [ShopController::class, 'shop_all']);
Route::post('/', [ShopController::class, 'search']);
Route::get('/detail', [ShopController::class, 'description']);

// メール確認の通知
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// 送信された電子メールを確認リンクをクリックしたときに生成されるリクエスト
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

// メール確認の再送信（確認メールの紛失・削除対策）
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
   
Route::middleware('verified')->group(function () {
    Route::post('/book', [BookController::class, 'book_create']);
    Route::get('/done', [BookController::class, 'book_done']);
    Route::get('/my_page', [BookController::class, 'book_list']);
    Route::delete('/book_delete', [BookController::class, 'book_destroy']);
    Route::post('/favorite', [FavoriteController::class, 'favorite']);
    Route::delete('/favorite_delete', [FavoriteController::class, 'favorite_destory']);
    Route::patch('/edit', [BookController::class, 'book_update']);
});
