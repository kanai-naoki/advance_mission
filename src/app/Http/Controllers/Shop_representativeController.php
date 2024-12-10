<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Book;
use App\Models\Orner;

class Shop_representativeController extends Controller
{
    // 店舗代表者ホーム
    public function orner_home() 
    {
        $user = Auth::user();
        
        return view('orner', compact('user'));

    }

    // 店舗情報新規作成ページ
    public function shop_create(Request $request)
    {
        $shop_detail = $request->all();
        Shop::create($shop_detail);

        return redirect('orner');
    }

    // 店舗情報更新ページ
    public function shop_detail_edit_home(Request $request)
    {
        $user = Auth::user();
        $shop_status = Shop::select('shops.id', 'areas.area', 'genres.genre', 'shop_name', 'shop_detail', 'shop_image')
            ->join('areas', 'shops.area_id', '=', 'areas.id')
            ->join('genres', 'shops.genre_id', '=', 'genres.id')
            // ->where('shops.shop_name', $request->shop_name)
            ->first();
        // dd($shop_status);
        return view('orner_edit', compact('user', 'shop_status'));
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
        
        return view('orner_books', compact('book_lists'));
    }
}
