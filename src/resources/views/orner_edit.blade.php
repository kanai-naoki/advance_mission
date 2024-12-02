@extends('layouts.admin_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/orner_edit.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="admin_edit_header_content_area">
    <h2 class="admin_edit_header_content">{{ $user->name }}さんお疲れ様です</h2>
</div>
<div class="admin_edit_content">
    <div class="orner_registration_area">
        <div class="orner_registration_content">
            <h3>店舗代表者登録情報</h3>
        </div>
        <table class="orner_registration_table">
            <tr>
                <th class="orner_registration_table_header">id</th>
                <td class="orner_registration_table_content"><p>{{ $orner->id }}</p>
                </td>
            </tr>     
            <tr>
                <th class="orner_registration_table_header">orner_name</th>
                <td class="orner_registration_table_content"><p>{{ $orner->name }}</p>
                </td>
            </tr>
            <tr>
                <th class="orner_registration_table_header">shop_name</th>
                <td class="orner_registration_table_content"><p>{{ $orner->shop_name }}</p>         
                </td>
            </tr>       
        </table>
    </div>
    <div class="orner_update_area">
        <div class="orner_update_content">
            <h3>店舗代表者情報更新</h3>
        </div>
        <table class="orner_update_table">
            <form class="orner_update_form" action="/orner_edit" method="post">
            @method('PATCH')
            @csrf    
                <tr>
                    <th class="orner_update_table_header">orner_name</th>
                    <td class="orner_update_table_content">
                        <input class="orner_update_form_name" type="text" name="name"  value="{{ old('name') }}">           
                    </td>
                </tr>
                @error('name')
                <tr>
                    <th class="orner_update_table_header"></th>
                    <td class="orner_update_table_content">
                        <p class="error_message" style="color: red">{{ $message }}</p>     
                    </td>
                </tr>
                @enderror
                <tr>
                    <th class="orner_update_table_header">shop_name</th>
                    <td class="orner_update_table_content">
                        <input class="orner_update_form_shop_name" type="text" name="shop_name" id="name" value="{{ old('shop_name') }}">
                    </td>
                </tr>
                @error('shop_name')
                <tr>
                    <th class="orner_update_table_header"></th>
                    <td class="orner_update_table_content">
                        <p class="error_message" style="color: red">{{ $message }}</p>     
                    </td>
                </tr>
                @enderror
                <tr class="orner_update_button_area">
                    <th class="orner_update_table_header"></th>
                    <td class="orner_update_table_submit">
                        <input type="hidden" name="id" value="{{ $orner->id }}">
                        <button class="orner_update_button" type="submit">変更する</button>
                    </td>
                </tr>
            </form>          
        </table>
    </div>
</div>
@endsection