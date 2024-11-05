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
                    <input type="hidden" name="name" value="{{ $shop_list->id }}">
                    <button class="shop_detail_button">詳しく見る</button>
                    {{-- お気に入りアイコン --}}    
                </form>   
            </div>
        </div>
    </div>    
    @endforeach    
</div>
@endsection