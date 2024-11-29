<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;

use App\Models\Review;

class ReviewController extends Controller
{
    // レビュー編集ページ
    public function review_form() 
    {
        return view('review');
    }

    // レビュー作成機能
    public function review_create(ReviewRequest $request)
    {
        $review = $request->all();
        Review::create($review);   
        return redirect('/');
    }

    // レビュー編集機能
    public function review_edit(ReviewRequest $request)
    {
        $review_edit = $request->all();
        Review::where('user_id', '=', $review->user_id)->where('shop_id', '=', $review->shop_id)->update($review_edit);
        return rediret('/');
    }

    // レビュー削除機能
    public function book_destroy(Request $request)
    {
        Review::find($request->id)->delete();
        return redirect('/');
    }
}
