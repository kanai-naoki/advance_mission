<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\BookRequest;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Book;

class BookController extends Controller
{
    // 予約登録機能
    public function book_create(Request $request)
    {
        $book_detail = $request->all();
        Book::create($book_detail);
        dd($book_detail);
        return redirect('done');
    }

    // 予約情報
    public function book_list()
    {
        return view('my_page');
    }

    // 予約h編集機能
    public function book_update()
    {
        return view('update_done');
    }

    // 予約h削除機能
    public function book_delete(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/my_page');
    }
}
