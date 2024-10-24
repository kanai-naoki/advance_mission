<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    // 予約登録機能
    public function book_create()
    {
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
    public function book_delete()
    {
        return redirect('/');
    }
}
