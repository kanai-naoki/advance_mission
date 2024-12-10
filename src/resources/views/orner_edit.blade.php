@extends('layouts.orner_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/orner_edit.css') }}">
@endsection

@section('content')
<div class="shop_update_header_content_area">
    <h2 class="shop_update_header_content">{{ $user->name }}さんお疲れ様です</h2>
</div>
<div class="shop_update_content">
    <div class="shop_detail_confirm_area">
        <div class="shop_detail_confirm_header">
            <div class="shop_detail_confirm_header_left">
                <form class="back_form" action="/orner" method="get">
                @csrf
                    <button class="back_button" type="submit"><</button>
                </form>                
                <h2 class="shop_detail_confirm_name">&nbsp{{ $shop_status->shop_name }}</h2>
            </div>
            <div class="shop_detail_confirm_header_right">
                <form class="shop_detail_delete_form" action="/review" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{ $shop_status->id }}">
                    <button class="shop_detail_delete_button" type="submit">削除する</button>
                </form>
            </div>
        </div>
        <div class="shop_detail_confirm_img">
            <img class="img" src="{{ $shop_status->shop_image }}">
        </div>
        <div class="shop_detail_confirm_tag">
            <p>#{{ $shop_status->area }}</p>
            <p>#{{ $shop_status->genre }}</p>    
        </div>
        <div class="shop_detail_confirm_description">
            <p>{{ $shop_status->shop_detail }}</p>
        </div>
    </div>
    <div class="shop_detail_update_area">
        <div class="shop_detail_update_header">
            <h2 class="shop_detail_update_content">店舗情報更新</h2>
        </div>
        <div class="shop_detail_update_form_area">
            <form class="shop_detail_update_form" action="orner_shop_detail_edit" method="post">
            @method('PACTH')                
            @csrf
                <div class="shop_detail_update_form_area_top">
                    <label class="shop_detail_update_form_label" for="shop_name">ShopName</label>
                    <input class="shop_detail_update_form_shop_name" type="text" name="shop_name" id="shop_name" value="{{ old('shop_name') }}" >
                    <label class="shop_detail_update_form_label" for="area_id">AreaId</label>
                    <select class="shop_detail_update_form_area_id" name="area_id" id="area_id">
                        <option selected value="null">-</option>
                        <option value="1">東京都</option>
                        <option value="2">大阪府</option>
                        <option value="3">福岡県</option>
                    </select>
                    <label class="shop_detail_update_form_label" for="genre_id">GenreId</label>
                    <select class="shop_detail_update_form_genre_id" name="genre_id" id="genre_id">
                        <option selected value="null">-</option>
                        <option value="1">寿司</option>
                        <option value="2">焼肉</option>
                        <option value="3">居酒屋</option>
                        <option value="4">イタリアン</option>
                        <option value="5">ラーメン</option>
                    </select>
                    <label class="shop_detail_update_form_label" for="shop_detail">ShopDetail</label>
                    <input class="shop_detail_update_form_shop_detail" type="textarea" name="shop_detail" id="shop_detail" cols="50" rows="4"value="{{ old('shop_detail') }}" >
                    <label class="shop_detail_update_form_label" for="shop_image">ShopImage</label>
                    <input class="shop_detail_update_form_shop_image" type="image" name="shop_image" id="shop_image src="">
                </div>
                <div class="shop_detail_update_form_area_bottom">
                    <input type="hidden" name="shop_id" value="{{ $shop_status->id }}">
                    <button class="shop_detail_update_button" type="submit">変更する</button>
                </div>        
            </form>
        </div>
    </div>
</div>
@endsection