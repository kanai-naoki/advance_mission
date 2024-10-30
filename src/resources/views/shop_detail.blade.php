@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
@endsection

@section('content')
<div class="shop_detail_content">
    <div class="shop_detail_area">
        <div class="shop_detail_header">
            <button class="shop_detail_button"><</button>
            <h2 class="shop_detail_content">{{ $shop_list->name }}</h2>
        </div>
        <div class="shop_detail_img">
            <img src="{{ $shop_list->shop_image }}">
        </div>
        <div class="shop_detail_tag">
            <span>#</span><p>{{ $shop_list->area }}<span>#</span>{{ $shop_list->genre }}</p>
        </div>
        <div class="shop_detail_description">
            <p>{{ $shop_list->detail }}</p>
        </div>
    </div>
    <div class="book_area">
        <div class="book_header">
            <h2 class="book_header_content">予約</h2>
        </div>
        <div class="book_form">
            <form action="/book" method="post">
            @csrf
                <input class="book_form_date" type="date" value="">
                <input class="book_form_time" type="time" value="">
                <input class="book_form_number" type="">
                <table class="book_confirm">
                    <tr>
                        <th>Shop</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td></td>
                    </tr>
                </table>
                <button class="book_button" type="submit">予約する</button>
            </form>
        </div>
    </div>
</div>
@endsection