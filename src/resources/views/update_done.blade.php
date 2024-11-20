@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update_done.css') }}">
@endsection

@section('content')
<div class="update_done_content_area">
    <div class="update_done_content">
        <div class="update_done_txt">
            <h3>変更を受け付けました。</h3>
            <form class="update_done_form" action="/detail" method="get">
            @csrf
                <button class="update_done_button">戻る</button>
            </form>
        </div>
    </div>
</div>
@endsection