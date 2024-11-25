<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BookRequest;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Book;

class BookController extends Controller
{
    // 予約登録機能
    public function book_create(BookRequest $request)
    {
        $book_detail = [
            'user_id' => Auth::id(),
            'shop_id'  => $request->shop_id,
            'book_date' => $request->book_date,
            'book_time' => $request->book_time,
            'number' => $request->number
        ];
        Book::create($book_detail);
        // dd($book_detail);
        return view('done');
    }

    // 予約情報一覧
    public function book_list()
    {   
        $user = Auth::user();
        $books = Book::select('books.id', 'shop_name', 'book_date', 'book_time', 'number')
            ->join('shops', 'books.shop_id', '=', 'shops.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->where('books.user_id', Auth::id())
            ->get();
        // dd($books);

        $favorites = Shop::select('user_id', 'shop_id', 'areas.area', 'genres.genre', 'shop_name', 'shop_image')
            ->join('areas', 'shops.area_id', '=', 'areas.id')
            ->join('genres', 'shops.genre_id', '=', 'genres.id')
            ->join('favorites', 'shops.id', '=', 'favorites.shop_id')
            ->where('favorites.user_id', Auth::id())
            ->get();
        // dd($favorites);
        
        return view('my_page', compact('user', 'books', 'favorites'));

    }

    // 予約h編集機能
    public function book_update(BookRequest $request)
    {
        // dd($request);
        $book_edit = $request->all();
        Book::find($request->id)->update($book_edit);
        return view('update_done');
    }

    // 予約h削除機能
    public function book_destroy(Request $request)
    {
        // dd($request);
        Book::find($request->id)->delete();
        return redirect('/my_page');
    }
}
