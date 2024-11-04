@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="shop_list_wrapper">
    @foreach ($shop_lists as $shop_list)
    <div class="shop_list_card">
        <div class="shop_list_content-img">
        <img class="img" src="{{ $shop_list->shop_imgage }}" />
    </div>
        <div class="shop_list_text-box">
            <h2 class="shop_name">{{ $shop_list->shop_name }}</h2>
            <p class="shop_area">{{ $shop_list->area }}</p>
            <p class="shop_genre">{{ $shop_list->genre }}</p>
            <div class="shop_list_button">
                <form action="/detail" method="get">
                @csrf
                    <button class="shop_detail_button">詳しく見る</button>
                    {{-- お気に入りアイコン --}}    
                </form>   
            </div>
        </div>
    </div>    
    @endforeach    
</div>
@endsection