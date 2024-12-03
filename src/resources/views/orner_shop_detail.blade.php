@extends('layouts.orner_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/orner_shop_detail.css') }}">
@endsection

@section('content')
<div class="orner_shop_detail_content">
    <div class="orner_shop_detail_area">
        <div class="orner_shop_detail_header">
            <div class="orner_shop_detail_header_left">
                <form class="orner_shop_detail_form" action="/orner" method="get">
                @csrf
                    <button class="orner_shop_detail_button" type="submit"><</button>
                </form>                
                <h2 class="orner_shop_detail_name">&nbsp{{ $shop_status->shop_name }}</h2>
            </div>
            <div class="orner_shop_detail_header_right">
                <form class="orner_shop_delete_form" action="/shop_detail_delete" method="post">
                @method('DELETE')
                @csrf
                    <input type="hidden" name="id" value="{{ $shop_status->id }}">
                    <button class="shop_detail_delete_button" type="submit">削除する</button>
                </form>
            </div>
        </div>
        <div class="orner_shop_detail_img">
            <img class="img" src="{{ $shop_status->shop_image }}">
        </div>
        <div class="orner_shop_detail_tag">
            <p>#{{ $shop_status->area }}</p>
            <p>#{{ $shop_status->genre }}</p>    
        </div>
        <div class="orner_shop_detail_description">
            <p>{{ $shop_status->shop_detail }}</p>
        </div>
    </div>
    <div class="orner_shop_detail_update_area">
        <div class="orner_shop_detail_update_header">
            <h2 class="orner_shop_detail_update_header_content">店舗情報更新</h2>
        </div>
        <div class="orner_shop_detail_update_form_area">
            <form class="orner_shop_detail_update_form" action="/book" method="post">
            @csrf
                <input class="orner_shop_detail_update_form_shop_name" type="text" name="shop_name" value="{{ old('shop_name') }}" >
                <select class="orner_shop_detail_update_form_area_id" name="area_id">
                    <option selected value="null">-</option>
                    <option value="1">東京都</option>
                    <option value="2">大阪府</option>
                    <option value="3">福岡県</option>
                </select>
                <select class="orner_shop_detail_update_form_genre_id" name="genre_id">
                    <option selected value="null">-</option>
                    <option value="1">寿司</option>
                    <option value="2">焼肉</option>
                    <option value="3">居酒屋</option>
                    <option value="4">イタリアン</option>
                    <option value="5">ラーメン</option>
                </select>
                <textarea class="orner_shop_detail_update_form_shop_detail" name="shop_detail" cols="50" rows="4"></textarea>
                <table class="book_confirm">
                    <tr class="book_confirm_row">
                        <th class="book_confirm_header">Shop</th>
                        <td class="book_confirm_txt">{{ $shop_status->shop_name }}</td>
                    </tr>
                    <tr class="book_confirm_row">
                        <th class="book_confirm_header">Date</th>
                        <td class="book_confirm_txt"></td>
                    </tr>
                    <tr class="book_confirm_row">
                        <th class="book_confirm_header">Time</th>
                        <td class="book_confirm_txt"></td>
                    </tr>
                    <tr class="book_confirm_row">
                        <th class="book_confirm_header">Number</th>
                        <td class="book_confirm_txt"></td>
                    </tr>
                </table>
                <input type="hidden" name="shop_id" value="{{ $shop_status->id }}">
                <button class="book_button" type="submit">予約する</button>        
            </form>
        </div>
    </div>
</div>
@endsection