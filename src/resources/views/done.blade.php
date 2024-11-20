@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done_content_area">
    <div class="done_content">
        <div class="done_txt">
            <h3>ご予約ありがとうございます。</h3>
            <form action="/" method="get">
                <button class="done_button">戻る</button>
            </form>
        </div>
    </div>
</div>
@endsection