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
        $orners = Orner::select('id', 'name', 'shop_name')
                    ->get();
    
        return view('admin', compact('user', 'orners'));
    }

    // 店舗代表者作成機能
    public function orner_create(OrnerRequest $request)
    {
        $orner_detail = $request->all();
        Orner::create($orner_detail);   
        return redirect('admin');
    }

    // 店舗代表者更新ページ
    public function orner_edit_home(Request $request)
    {
        $user = Auth::user();
        $orner = Orner::select('id', 'name', 'shop_name')
                    ->where('id', $request->id)
                    ->first();

        return view('orner_edit', compact('user', 'orner'));
    }

    // 店舗代表者編集機能
    public function orner_edit(OrnerRequest $request)
    {
        $orner_detail_edit = [
            'name' => $request->name,
            'shop_name'  => $request->shop_name,
        ];
        Orner::find($request->id)->update($orner_detail_edit);
        return redirect('admin');
    }

    // 店舗代表者削除機能
    public function orner_destroy(Request $request)
    {
        Orner::find($request->id)->delete();
        return redirect('admin');
    }
}
