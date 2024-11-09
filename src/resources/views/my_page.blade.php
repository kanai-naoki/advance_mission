@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')
<div class="my_page_header_content">
    <h2>{{ $user->name }}さん</h2>
</div>
<div class="my_page_content">
    <div class="book_status">
        <div class="book_content">
            <h3>予約状況</h3>
        </div>
        <div class="book_table">
            <table class="table">
                @foreach ($books as $book)
                <tr>
                    <th class="book_table_header">
                        {{-- 時計アイコンを挿入 --}}
                        <p>予約1</p><span></span>
                    </th>
                    {{-- <td <form class="form" action="{{ route('logout') }}" method="post">@csrf<div class="book_delete_button">削除アイコンを挿入</div></td> --}}
                </tr> 
                <tr>
                    <th class="book_table_header">Shop</th>
                    <td class="book_table_content">{{ $book->shop_name }}</td>
                </tr>
                <tr>
                    <th class="book_table_header">Date</th>
                    <td class="book_table_content">{{ $book->book_date }}</td>
                </tr>
                <tr>
                    <th class="book_table_header">Time</th>
                    <td class="book_table_content">{{ $book->book_time }}</td>
                </tr>
                <tr>
                    <th class="book_table_header">Numboer</th>
                    <td class="book_table_content">{{ $book->number }}</td>
                </tr>
                @endforeach               
            </table>
        </div>
    </div>
    <div class="favorite_status">
        <div class="favorite_content">
            <h3>お気に入り店舗</h3>
        </div>
        <div class="favorite_wrapper">       
        @foreach ($favorite_lists as $favorite_list)
            <div class="favorite_list_card">
                <div class="favorite_list_content-img">
                <img class="img" src="{{ $favorite_list->shop_image }}" />
            </div>
            <div class="favorite_list_text-box">
                <div class="shop_name_area">
                    <h2 class="shop_name">{{ $shop_list->shop_name }}</h2>
                </div>
                <div class="shop_tag_area">
                    <p class="shop_area">#{{ $shop_list->area }}</p>
                    <p class="shop_genre">#{{ $shop_list->genre }}</p>
                </div>
                <div class="favorite_detail_area">
                    <form action="/detail" method="get">
                    @csrf
                        <button class="shop_detail_button">詳しく見る</button>
                        {{-- お気に入りアイコン --}}
                    </form>
                </div>
            </div>
        @endforeach 
        </div>
    </div>          
</div>
@endsection