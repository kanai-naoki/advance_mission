<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrnerRequest;

use App\Models\Orner;

class OrnerController extends Controller
{
    // 店舗代表者編集ページ
    public function admin_form() 
    {
        return view('admin');
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
