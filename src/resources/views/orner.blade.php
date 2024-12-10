@extends('layouts.orner_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/orner.css') }}">
@endsection

@section('content')
<div class="orner_page_header_content_area">
    <h2 class="orner_page_header_content">{{ $user->name }}さんお疲れ様です</h2>
</div>
<div class="orner_page_content">
    <div class="shop_detail_create_area">
        <div class="shop_detail_create_header">
            <h2 class="shop_detail_create_content">店舗情報新規作成</h2>
        </div>
        <div class="shop_detail_create_form_area">
            <form class="shop_detail_create_form" action="/newshop" method="post">                
            @csrf
                <div class="shop_detail_create_form_area_top">
                    <label class="shop_detail_create_form_label" for="shop_name">ShopName</label>
                    <input class="shop_detail_create_form_shop_name" type="text" name="shop_name" id="shop_name" value="{{ old('shop_name') }}" >
                    <label class="shop_detail_create_form_label" for="area_id">AreaId</label>
                    <select class="shop_detail_create_form_area_id" name="area_id" id="area_id">
                        <option selected value="null">-</option>
                        <option value="1">東京都</option>
                        <option value="2">大阪府</option>
                        <option value="3">福岡県</option>
                    </select>
                    <label class="shop_detail_create_form_label" for="genre_id">GenreId</label>
                    <select class="shop_detail_create_form_genre_id" name="genre_id" id="genre_id">
                        <option selected value="null">-</option>
                        <option value="1">寿司</option>
                        <option value="2">焼肉</option>
                        <option value="3">居酒屋</option>
                        <option value="4">イタリアン</option>
                        <option value="5">ラーメン</option>
                    </select>
                    <label class="shop_detail_create_form_label" for="shop_detail">ShopDetail</label>
                    <input class="shop_detail_create_form_shop_detail" type="textarea" name="shop_detail" id="shop_detail" cols="50" rows="4"value="{{ old('shop_detail') }}" >
                    <label class="shop_detail_create_form_label" for="shop_image">ShopImage</label>
                    <input class="shop_detail_create_form_shop_image" type="image" name="shop_image" id="shop_image src="">
                </div>
                <div class="shop_detail_create_form_area_bottom">
                    <button class="shop_detail_create_button" type="submit">作成する</button>
                </div>        
            </form>
        </div>
    </div>
</div>
@endsection