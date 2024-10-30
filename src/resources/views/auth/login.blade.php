@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login_content area">
    <div class="login_form">
        <table class="table">
            <thead class="login_form_header">
                <tr class="login_form_header_table">
                    <th class="login_form_header_txt">Login</th>
                </tr>
            </thead>
            <tbody class="login_form_item">
                <tr class="login_form_item_table">
                    <th class="login_form_item_header">
                        {{-- email アイコン --}}
                        <p>Email</p>
                    </th>
                    <td class="login_fonm_email"></td>
                </tr>
                <tr class="login_form_item_table">
                    <th class="login_form_item_header">
                        {{-- password アイコン --}}
                        <p>Password</p>
                    </th>
                    <td class="login_fonm_password"></td>
                </tr>
            </tbody>
        </table>
        <div class="login_form_submit">
            <form action="/login" method="post">
            @csrf
                <button class="login_form_submit" type="submit">ログイン</button>
            </form>
        </div>
    </div>
</div>
@endsection