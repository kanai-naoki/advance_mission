@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="my_page_header_content_area">
    <h2 class="my_page_header_content">{{ $user->name }}さん</h2>
</div>
<div class="my_page_content">
    <div class="book_status">
        <div class="book_content">
            <h3>予約状況</h3>
        </div>
        <div class="book_table_wrapper">
        @foreach ($books as $book)
            <table class="book_table">      
                <tr class="book_table_ttl_area">
                    <th class="book_table_ttl">
                        <span class="material-icons">schedule</span>&nbsp
                        <p>予約{{ $loop->iteration }}</p>
                    </th>
                    <td class="book_delete">
                        <form class="book_delete_form" action="/book_delete" method="post">
                        @method('DELETE')
                        @csrf
                            <input type="hidden" name="id" value="{{ $book->id }}">
                            <button class="book_delete_button" type="submit">       
                                <span class="material-icons">cancel</span>
                            </button>
                        </form>        
                    </td> 
                </tr> 
                <form action="/edit" method="post">
                @method('PATCH')
                @csrf
                <tr>
                    <th class="book_table_header">Shop</th>
                    <td class="book_table_content">
                        <p class="book_detail">{{ $book->shop_name }}</p>                        
                    </td>
                </tr>
                <tr>
                    <th class="book_table_header">Date</th>
                    <td class="book_table_content">
                        <p class="book_detail">{{ $book->book_date }}</p>
                        <input class="book_update_form" type="date" name="book_date" value="{{ old('book_date') }}" >
                    </td>
                </tr>
                @error('book_date')
                    <tr>
                        <th class="book_table_header"></th>
                        <td class="book_table_content">
                            <p class="error_message" style="color: red">{{ $message }}</p>     
                        </td>
                    </tr>
                @enderror
                <tr>
                    <th class="book_table_header">Time</th>
                    <td class="book_table_content">
                        <p class="book_detail">{{ $book->book_time }}</p>
                        <select class="book_update_form" name="book_time">
                            <option selected value="null">-</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                            <option value="21:30">21:30</option>
                            <option value="22:00">22:00</option>
                            <option value="22:30">22:30</option>
                        </select>
                    </td>
                </tr>
                @error('book_time')
                    <tr>
                        <th class="book_table_header"></th>
                        <td class="book_table_content">
                            <p class="error_message" style="color: red">{{ $message }}</p>     
                        </td>
                    </tr>
                @enderror
                <tr>
                    <th class="book_table_header">Numboer</th>
                    <td class="book_table_content">
                        <p class="book_detail">{{ $book->number }}人</p>
                        <select class="book_update_form" name="number">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </td>
                </tr>
                <tr class="book_update_button_area">
                    <th class="book_table_header"></th>
                    <td class="book_table_submit">
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <button class="book_update_button" type="submit">変更する</button>
                    </td>
                </tr>
                </form>          
            </table>
            @endforeach
        </div>
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