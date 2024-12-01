@extends('layouts.admin_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="admin_header_content_area">
    <h2 class="admin_header_content">{{ $user->name }}さんお疲れ様です</h2>
</div>
<div class="admin_content">
    <div class="orner_create_area">
        <div class="orner_create_content">
            <h3>店舗代表者新規登録</h3>
        </div>
        <table class="orner_create_table">
            <form class="orner_create_form" action="/orner" method="post">
            @csrf     
                <tr>
                    <th class="orner_create_table_header">orner_name</th>
                    <td class="orner_create_table_content">
                        <input class="orner_create_form_name" type="text" name="name"  value="{{ old('name') }}">           
                    </td>
                </tr>
                @error('name')
                <tr>
                    <th class="orner_create_table_header"></th>
                    <td class="orner_create_table_content">
                        <p class="error_message" style="color: red">{{ $message }}</p>     
                    </td>
                </tr>
                @enderror
                <tr>
                    <th class="orner_create_table_header">shop_name</th>
                    <td class="orner_create_table_content">
                        <input class="orner_create_form_shop_name" type="text" name="shop_name" id="name" value="{{ old('shop_name') }}">
                    </td>
                </tr>
                @error('shop_name')
                <tr>
                    <th class="orner_create_table_header"></th>
                    <td class="orner_create_table_content">
                        <p class="error_message" style="color: red">{{ $message }}</p>     
                    </td>
                </tr>
                @enderror
                <tr class="orner_create_button_area">
                    <th class="orner_create_table_header"></th>
                    <td class="orner_create_table_submit">
                        <button class="orner_create_button" type="submit">登録する</button>
                    </td>
                </tr>
            </form>          
        </table>
    </div>
    <div class="favorite_status">
        <div class="favorite_content">
            <h3>お気に入り店舗</h3>
        </div>
        <div class="favorite_wrapper">       
        @foreach ($favorites as $favorite)
            <div class="favorite_list_card">
                <div class="favorite_list_content-img">
                <img class="img" src="{{ $favorite->shop_image }}" />
            </div>
            <div class="favorite_list_text-box">
                <div class="shop_name_area">
                    <h2 class="shop_name">{{ $favorite->shop_name }}</h2>
                </div>
                <div class="shop_tag_area">
                    <p class="shop_area">#{{ $favorite->area }}</p>
                    <p class="shop_genre">#{{ $favorite->genre }}</p>
                </div>
                <div class="favorite_detail_area">
                    <form class="favorite_detail" action="/detail" method="get">
                    @csrf
                        <input type="hidden" name="id" value="{{ $favorite->shop_id }}">
                        <button class="shop_detail_button">詳しく見る</button>
                    </form>
                    <form class="favorite_form" action="/favorite_delete" method="post">
                    @csrf
                    @method('DELETE')
                        <input type="hidden" name="user_id" value="{{ $favorite->user_id }}">
                        <input type="hidden" name="shop_id" value="{{ $favorite->shop_id }}">
                        <button class="favorite_button" type="submit">       
                            <span class="material-icons">favorite</span>
                        </button>
                    </form>
                </div>
            </div> 
        </div>
        @endforeach
    </div>          
</div>
@endsection