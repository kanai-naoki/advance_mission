@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="{{ asset('/js/search.js') }}"></script>
@endsection

@section('search')
<div class="search_content">
    <div class="search_content_box">
        <table class="search_table">
            <tr>
                <form class="search_area_form" action="/" name="search" id="search_form" method="post">
                    @csrf
                <td class="search_area">
                     <select class="search_area_select_box" name="area_id" id="area">
                        <option selected value="">All Area</option>
                        <option value="1">東京都</option>
                        <option value="2">大阪府</option>
                        <option value="3">福岡</option>
                    </select>  
                </td>
                <td class="search_genre">
                    <select class="search_area_genre_box" name="genre_id" id="genre">
                        <option selected value="">All Genre</option>
                        <option value="1">寿司</option>
                        <option value="2">焼肉</option>
                        <option value="3">居酒屋</option>
                        <option value="4">イタリアン</option>
                        <option value="5">ラーメン</option>
                    </select>
                </td>
                <td class="search_word">
                    <span class="material-icons">search</span>
                    <input class="search_word_box" type="search" name="search_word" id="search_word" placeholder="Search">
                </td>
                </form>    
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
                <form class="shop_detail_form" action="/detail" method="get">
                @csrf
                    <input type="hidden" name="id" value="{{ $shop_list->id }}">
                    <button class="shop_detail_button">詳しく見る</button>
                </form>
                {{-- どうやって、画面表示を切り替えるか考える。IFに設定できる式等を調べてくる --}}
                @empty($favorite)
                <form class="favorite_form" action="/favorite" method="post" >
                @csrf    
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="shop_id" value="{{ $shop_list->id }}">
                    <button class="favorite_button" type="submit">
                        <span class="material-icons">favorite</span>
                    </button>
                </form>
                @else
                <form class="favorite_delete_form" action="/favorite_delete">
                @csrf
                @method('DELETE')
                    <button class="favorite_delete_button" type="submit">
                        <span class="material-icons">favorite</span>
                    </button>
                </form>
                @endempty   
            </div>
        </div>
    </div>    
    @endforeach    
</div>
@endsection