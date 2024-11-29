<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Orner;

class Shop_representative extends Controller
{
    // 店舗代表者ホーム
    public function orner_home() 
    {
        return view('order');
    }

    // 店舗情報編集機能
    public function shop_detail_update(Request $request)
    {
        $shop_detail_edit = $request->all();
        Shop::find($request->shop_id)->update($shop_detail_edit);
        return redirect('/');
    }

    // 店舗情報削除機能
    public function shop_detail_destroy(Request $request)
    {
        Shop::find($request->shop_id)->delete();
        return redirect('/');
    }

    // 予約情報確認機能
    public function book_list()
    {
        $book_lists = Book::select('users.id', 'users.name', 'shop_name', 'book_date', 'book_time', 'number')
            ->join('shops', 'books.shop_id', '=', 'shops.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->get();
        
        return view('', compact('book_lists'));
    }
}
