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
                    <th><p>予約1</p><span></span></th>
                </tr> 
                <tr>
                    <th>Shop</th>
                    <td>{{ $book->shop_name }}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{ $book->book_date }}</td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>{{ $book->book_time }}</td>
                </tr>
                <tr>
                    <th>Numboer</th>
                    <td>{{ $book->number }}</td>
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
                <img src="{{ $favorite_list->shop_image }}" />
            </div>
            <div class="shop_list_text-box">
                <h2>{{ $favorite_list->shop_name }}</h2>
                <p>{{ $favorite_list->area }}</p>
                <p>{{ $favorite_list->genre }}</p>
            <div class="shop_list_button">
                <form action="/detail" method="get">
                @csrf
                    <button class="shop_detail_button">詳しく見る</button>
                    {{-- お気に入りアイコン --}}
                </form>
            </div>
        @endforeach 
        </div>
    </div>          
</div>
@endsection