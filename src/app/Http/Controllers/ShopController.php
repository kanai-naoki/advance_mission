<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // ホーム画面及び絞り込み検索機能
    public function shop_list()
    {
        // 全店舗の情報をShopモデルから取得する。
        view('/');
    }

    // 店舗詳細表示機能
    public function description()
    {
        // 店舗詳細情報をShopモデルから取得してページを表示する
        view('/shop_detail');
    }
}
