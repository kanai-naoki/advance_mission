@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
@endsection

@section('content')
<div class="shop_detail_content">
    <div class="shop_detail_area">
        <div class="shop_detail_header">
            <form class="shop_detail_form" action="/" method="get">
            @csrf
                <button class="shop_detail_button" type="submit"><</button>
            </form>                
            <h2 class="shop_detail_name">&nbsp{{ $shop_status->shop_name }}</h2>
        </div>
        <div class="shop_detail_img">
            <img class="img" src="{{ $shop_status->shop_image }}">
        </div>
        <div class="shop_detail_tag">
            <p>#{{ $shop_status->area }}</p>
            <p>#{{ $shop_status->genre }}</p>    
        </div>
        <div class="shop_detail_description">
            <p>{{ $shop_status->shop_detail }}</p>
        </div>
    </div>
    <div class="book_area">
        <div class="book_header">
            <h2 class="book_header_content">予約</h2>
        </div>
        <div class="book_form_area">
            <form action="/book" method="post">
            @csrf
                <div class="book_form">
                    <input class="book_form_date" type="date" value="">
                    <input class="book_form_time" type="time" value="">
                    <input class="book_form_number" type="">
                    <table class="book_confirm">
                        <tr class="book_confirm_row">
                            <th class="book_confirm_header">Shop</th>
                            <td class="book_confirm_txt"></td>
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
                </div>
                <div class="book_submit">
                    <button class="book_button" type="submit">予約する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection