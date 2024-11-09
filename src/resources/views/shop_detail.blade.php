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
                    <input class="book_form_date" type="date" name="book_date" value="2024-01-01" >
                    <select class="book_form_time" name="book_time">
                        <option selected value="17:00">17:00</option>
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
                    <select class="book_form_number" name="book_number">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
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
                    <input type="hidden" name="shop_id" value="{{ $shop_status->id }}">
                    <button class="book_button" type="submit">予約する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection