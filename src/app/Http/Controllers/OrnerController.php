<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrnerRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Book;
use App\Models\Orner;

class OrnerController extends Controller
{
    // 店舗代表者編集ページ
    public function admin_home() 
    {
        $user = Auth::user();
        $books = Book::select('books.id', 'shop_name', 'book_date', 'book_time', 'number')
            ->join('shops', 'books.shop_id', '=', 'shops.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->where('books.user_id', Auth::id())
            ->get();

        $favorites = Shop::select('user_id', 'shop_id', 'areas.area', 'genres.genre', 'shop_name', 'shop_image')
            ->join('areas', 'shops.area_id', '=', 'areas.id')
            ->join('genres', 'shops.genre_id', '=', 'genres.id')
            ->join('favorites', 'shops.id', '=', 'favorites.shop_id')
            ->where('favorites.user_id', Auth::id())
            ->get();
        
        return view('admin', compact('user', 'books', 'favorites'));
    }

    // 店舗代表者作成機能
    public function orner_create(OrnerRequest $request)
    {
        $orner_detail = $request->all();
        Orner::create($orner_detail);   
        return redirect('/');
    }

    // 店舗代表者編集機能
    public function orner_edit(OrnerRequest $request)
    {
        $orner_detail_edit = $request->all();
        Orner::find($orner_detail_edit->id)->update($orner_edit);
        return redirect('/');
    }

    // 店舗代表者削除機能
    public function orner_destroy(Request $request)
    {
        Orner::find($request->id)->delete();
        return redirect('/');
    }
}
