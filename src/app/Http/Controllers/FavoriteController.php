<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    
    // お気に入り登録機能
    public function favorite_create(Request $request)
    {
        $favorite = $request->all();
        Favorite::create($favorite);   
        return redirect('/');
    }

    // お気に入り削除機能
    public function favorite_destory(Request $request) 
    {
        Favorite::where('user_id', '=', $request->user_id)->where('shop_id', '=', $request->shop_id)->delete();
        return redirect('/my_page');
    }
        
}
