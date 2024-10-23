<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // ホーム画面(全店舗表示)
    public function shop_all()
    {
        // 全店舗の情報をShopモデルから取得する。
        return view('index');
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
