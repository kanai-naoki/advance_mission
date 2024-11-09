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

    // お気に入り一覧
    public function favorite_list()
    {
        
        return view('my_page');
    }

    // お気に入り削除機能
    public function favorite_remove(Request $request)
    {
        Favorite::find($request->id)->delete();
        return redirect('/');
    }

    
}
