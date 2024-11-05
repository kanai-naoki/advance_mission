<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class ShopController extends Controller
{
    // ホーム画面(全店舗表示)
    public function shop_all()
    {
        $shop_lists = Shop::select('shops.id', 'shop_name', 'shop_detail', 'shop_image')
            ->join('areas', 'shops.area_id', '=', 'areas.id')
            ->join('genres', 'shops.genre_id', '=', 'genres.id')
            ->get();
        // dd($shop_lists);
        return view('index', compact('shop_lists'));
    }

    // 場所検索機能
    public function search_area()
    {
        
        return view('index');
    }

    // ジャンル検索機能
    public function search_genre()
    {
        
        return view('index');
    }

    // 店名検索機能
    public function search_shopName()
    {
        
        return view('index');
    }

    // 店舗詳細表示
    public function description()
    {
        
        return view('shop_detail');
    }
}
