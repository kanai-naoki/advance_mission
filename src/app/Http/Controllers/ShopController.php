<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Favorite;

class ShopController extends Controller
{
    // ホーム画面(全店舗表示)
    public function shop_all()
    {
        $shop_lists = Shop::select('shops.id', 'areas.area', 'genres.genre', 'shop_name', 'shop_image')
            ->join('areas', 'shops.area_id', '=', 'areas.id')
            ->join('genres', 'shops.genre_id', '=', 'genres.id')
            ->get();
        // dd($shop_lists);
        return view('index', compact('shop_lists'));
    }

    // 場所検索機能
    public function search(Request $request)
    {
        $search_results = Shop::select('shops.id', 'areas.area', 'genres.genre', 'shop_name', 'shop_image')
            ->join('areas', 'shops.area_id', '=', 'areas.id')
            ->join('genres', 'shops.genre_id', '=', 'genres.id')
            ->where()
            ->get();
        // dd($search_results);
        return view('index', compact('search_results'));
    }

    
    // 店舗詳細表示
    public function description(Request $request)
    {
        $shop_status = Shop::select('shops.id', 'areas.area', 'genres.genre', 'shop_name', 'shop_detail', 'shop_image')
            ->join('areas', 'shops.area_id', '=', 'areas.id')
            ->join('genres', 'shops.genre_id', '=', 'genres.id')
            ->where('shops.id', $request->id)
            ->first();
        // dd($shop_status);
        return view('shop_detail', compact('shop_status'));
    }
}
