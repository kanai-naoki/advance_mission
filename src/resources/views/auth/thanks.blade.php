@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks_content_area">
    <div class="thanks_content">
        <div class="thanks_txt">
            <h3>会員登録ありがとうございます</h3>
            <form class="thanks_form" action="/login" method="post">
            @csrf
                <button class="thnaks_button" type="submit" >ログインする</button>
            </form>
        </div>
    </div>
</div>
@endsection