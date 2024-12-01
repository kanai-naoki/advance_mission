@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

@section('content')
<div class="review_content">
    <div class="review_area">
        <div class="review_header">
            <div class="review_header_left">
                <form class="review_form" action="/detail" method="get">
                @csrf
                    <input type="hidden" name="id" value="{{ $shop_detail->id }}">
                    <button class="reverse_button" type="submit"><</button>
                </form>                
                <h2 class="shop_detail_name">&nbsp{{ $shop_detail->shop_name }}</h2>
            </div>
            <div class="review_header_right">
                <form class="review_delete_form" action="/review_delete" method="post">
                @method('DELETE')
                @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="shop_id" value="{{ $shop_detail->id }}">
                    <button class="review_delete_button" type="submit">削除する</button>
                </form>
            </div>
        </div>
        <div class="shop_detail_img">
            <img class="img" src="{{ $shop_detail->shop_image }}">
        </div>
        <div class="review_txt">
            {{-- <p>評価:&nbsp{{ $review_detail->evaluation }}</p> --}}
            {{-- <p>{{ $review_detail->comment }}</p>     --}}
        </div>
        <div class="review_create_area">
            <form class="review_create_form" action="/review" method="post">
            @csrf
                <div class="review_create_input">
                    <div class="review_create_input_evaluation">
                        <p class="review_create_evaluation_txt">1.良くなかった&nbsp&nbsp2.あまり良くなかった&nbsp&nbsp3.普通&nbsp&nbsp4.良かった&nbsp&nbsp5.非常に良かった</p>
                        <label class="review_create_label" for="evaluation">評価</label>
                        <select class="review_form_evaluation" name="evaluation" id="evaluation">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        @error('evaluation')
                        <p style="color: red">{{ $message }}</p>
                        @enderror           
                    </div>
                    <div class="review_create_input_comment">
                        <label class="review_create_label" for="comment">感想</label>
                        <input class="review_form_comment" type="textarea" name="comment" id="comment" placeholder="例）カウンター席が広く、周囲を気にせずにゆっくり過ごすことができた。" >
                        @error('comment')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="review_create_submit">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="shop_id" value="{{ $shop_detail->id }}">
                    <button class="review_create_button">投稿する</button>
                </div>
            </form>    
        </div>
    </div>
@endsection