@extends('layouts.admin_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="admin_header_content_area">
    <h2 class="admin_header_content">{{ $user->name }}さんお疲れ様です</h2>
</div>
<div class="admin_content">
    <div class="orner_create_area">
        <div class="orner_create_content">
            <h3>店舗代表者新規登録</h3>
        </div>
        <table class="orner_create_table">
            <form class="orner_create_form" action="/orner" method="post">
            @csrf     
                <tr>
                    <th class="orner_create_table_header">orner_name</th>
                    <td class="orner_create_table_content">
                        <input class="orner_create_form_name" type="text" name="name"  value="{{ old('name') }}">           
                    </td>
                </tr>
                @error('name')
                <tr>
                    <th class="orner_create_table_header"></th>
                    <td class="orner_create_table_content">
                        <p class="error_message" style="color: red">{{ $message }}</p>     
                    </td>
                </tr>
                @enderror
                <tr>
                    <th class="orner_create_table_header">shop_name</th>
                    <td class="orner_create_table_content">
                        <input class="orner_create_form_shop_name" type="text" name="shop_name" id="name" value="{{ old('shop_name') }}">
                    </td>
                </tr>
                @error('shop_name')
                <tr>
                    <th class="orner_create_table_header"></th>
                    <td class="orner_create_table_content">
                        <p class="error_message" style="color: red">{{ $message }}</p>     
                    </td>
                </tr>
                @enderror
                <tr class="orner_create_button_area">
                    <th class="orner_create_table_header"></th>
                    <td class="orner_create_table_submit">
                        <button class="orner_create_button" type="submit">登録する</button>
                    </td>
                </tr>
            </form>          
        </table>
    </div>
    <div class="orner_lists">
        <div class="orner_lists_content">
            <h3>店舗代表者一覧</h3>
        </div>
        <table class="orner_lists_table">    
            <tr>
                <th class="orner_lists_table_order_name_header"><p>orner_name</p></th>
                <th class="orner_lists_table_shop_name_header"><p>shop_name</p></th>                    
            </tr>
            @foreach ($orners as $orner)
            <tr>
                <td class="orner_lists_table_order_name_content">
                    <p>{{ $orner->name }}</p>
                </td>
                <td class="orner_lists_table_shop_name_content">
                    <div class="shop_name_content_left">
                    <p>{{ $orner->shop_name }}</p>
                    </div>
                    <div class="shop_name_content_right">
                        <form class="orner_update_form" action="/orner_edit" method="get">
                        @csrf
                            <button class="orner_update_button">変更する</button>
                        </form>
                        <form class="orner_delete_form" action="/orner_delete" method="post">
                        @method('DELETE')
                        @csrf
                            <input type="hidden" name="id" value="{{ $orner->id }}">
                            <button class="orner_delete_button" type="submit">削除する</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach              
        </table>
    </div>          
</div>
@endsection