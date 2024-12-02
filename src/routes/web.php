<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrnerController;
use App\Http\Controllers\Shop_representativeController;

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
    Route::patch('/book_edit', [BookController::class, 'book_update']); 
    Route::delete('/book_delete', [BookController::class, 'book_destroy']);
    Route::get('/my_page', [BookController::class, 'book_list']);
    Route::get('/review', [ReviewController::class, 'review_form']);
    Route::post('/review', [ReviewController::class, 'review_create']);
    // Route::patch('/review_edit', [ReviewController::class, 'review_update']);
    Route::delete('/review_delete', [ReviewController::class, 'review_destroy']);
    Route::post('/favorite', [FavoriteController::class, 'favorite_create']);
    Route::delete('/favorite_delete', [FavoriteController::class, 'favorite_destory']);    
});

// 管理者権限
Route::get('/admin', [OrnerController::class, 'admin_home']);
Route::post('/orner', [OrnerController::class, 'orner_create']);
Route::get('/orner_edit', [OrnerController::class, 'orner_edit_home']);
Route::patch('/orner_edit', [OrnerController::class, 'orner_edit']);
Route::delete('/orner_delete', [OrnerController::class, 'orner_destroy']);

// 店舗代表者権限
Route::get('/orner', [Shop_representativeController::class, 'orner_home']);
Route::patch('/orner_shop_detail_edit', [Shop_representativeController::class, 'shop_detail_update']);
Route::delete('/orner_shop_detail_delete', [Shop_representativeController::class, 'shop_detail_destroy']);
Route::get('/books', [Shop_representativeController::class, 'book_list']);