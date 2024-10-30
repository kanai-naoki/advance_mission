@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update_done.css') }}">
@endsection

@section('content')
<div class="update_done_content">
    <div class="update_done_txt">
        <h3>変更を受け付けました。</h3>
        <form action="/detail" method="get">
            <button class="update_done_button">戻る</button>
        </form>
    </div>
</div>
@endsection