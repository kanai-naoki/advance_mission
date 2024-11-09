@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('search')
<div class="search_content">
    <div class="search_content_box">
        <table class="search_table">
            <tr>
                <td class="search_area">
                    <form class="search_area_form" action="/" method="post">
                    @csrf
                        <select class="search_area_select_box" name="area_id">
                            <option selected>All Area</option>
                            <option value="1">東京都</option>
                            <option value="2">大阪府</option>
                            <option value="3">福岡</option>
                        </select>
                    </form>
                </td>
                <td class="search_genre">
                    <form class="search_genre_form" action="/" method="post">
                    @csrf
                        <select class="search_area_genre_box" name="genre_id">
                            <option selected>All Genre</option>
                            <option value="1">寿司</option>
                            <option value="2">焼肉</option>
                            <option value="3">居酒屋</option>
                            <option value="4">イタリアン</option>
                            <option value="5">ラーメン</option>
                        </select>
                    </form>
                </td>
                <td class="search_word">
                    <form class="search_word_form" method="get">
                        <input class="search_word_box" type="search" placeholder="Search">
                    </form>
                </td>    
            </tr>
        </table>
    </div>           
</div>
@endsection

@section('content')
<div class="shop_list_wrapper">
    @foreach ($shop_lists as $shop_list)
    <div class="shop_list_card">
        <div class="shop_list_content-img">
        <img class="img" src="{{ $shop_list->shop_image }}" />
    </div>
        <div class="shop_list_text-box">
            <div class="shop_name_area">
                <h2 class="shop_name">{{ $shop_list->shop_name }}</h2>
            </div>
            <div class="shop_tag_area">
                <p class="shop_area">#{{ $shop_list->area }}</p>
                <p class="shop_genre">#{{ $shop_list->genre }}</p>
            </div>
            <div class="shop_detail_area">
                <form action="/detail" method="get">
                @csrf
                    <input type="hidden" name="id" value="{{ $shop_list->id }}">
                    <button class="shop_detail_button">詳しく見る</button>
                    {{-- お気に入りアイコン --}}    
                </form>   
            </div>
        </div>
    </div>    
    @endforeach    
</div>
@endsection