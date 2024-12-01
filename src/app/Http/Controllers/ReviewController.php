<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\Shop;
use App\Models\Review;

class ReviewController extends Controller
{
    // レビュー編集ページ
    public function review_form(Request $request) 
    {
        $user = Auth::user();
        $shop_detail = Shop::select('id', 'shop_name', 'shop_image')
            ->where('shops.id', $request->id)
            ->first();
        // dd($shop_detail);

        $review_detail = Review::select('evaluation', 'comment')
            ->where('user_id', Auth::id())->where('shop_id', $request->id)
            ->first();
        // dd($review);
        return view('review', compact('shop_detail', 'user', 'review_detail'));
    }

    // レビュー作成機能
    public function review_create(ReviewRequest $request)
    {
        $review = [
            'user_id' => Auth::id(),
            'shop_id'  => $request->shop_id,
            'evaluation' => $request->evaluation,
            'comment' => $request->comment,
        ];
        Review::create($review);   
        return redirect('/');
    }

    // レビュー削除機能
    public function review_destroy(Request $request)
    {
        Review::where('user_id', $request->user_id)->where('shop_id', $request->shop_id)->delete();
        return redirect('/');
    }
}
