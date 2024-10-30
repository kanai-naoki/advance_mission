@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register_content_area">
    <div class="register_form">
        <table class="table">
            <thead class="register_form_header">
                <tr class="register_form_header_table">
                    <th class="register_form_header_txt">Registration</th>
                </tr>
            </thead>
            <tbody class="register_form_item">
                <tr class="register_form_item_table">
                    <th class="register_form_item_header">
                        {{-- username アイコン --}}
                        <p>Username</p>
                    </th>
                    <td class="register_fonm_username"></td>
                </tr>
                <tr class="register_form_item_table">
                    <th class="register_form_item_header">
                        {{-- email アイコン --}}
                        <p>Email</p>
                    </th>
                    <td class="register_fonm_email"></td>
                </tr>
                <tr class="register_form_item_table">
                    <th class="register_form_item_header">
                        {{-- password アイコン --}}
                        <p>Password</p>
                    </th>
                    <td class="register_fonm_password"></td>
                </tr>    
            </tbody>
        </table>
        <div class="register_form_submit">
            <form action="/register" method="post">
                @csrf
                <button class="register_form_button" type="submit">登録</button>
            </form>
        </div>
    </div>
</div>
@endsection