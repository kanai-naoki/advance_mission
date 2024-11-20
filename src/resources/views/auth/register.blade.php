@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <form class="register_form" action="{{ route('register') }}" method="post">
                @csrf
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                            <span class="material-icons">person</span>
                            <label class="register_from_item_label" for="name">Username</label>
                            <input class="register_form_name" type="text" name="name" id="name" value="{{ old('name') }}">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                            <span class="material-icons">mail</span>
                            <label class="register_from_item_label" for="email">Email</label>
                            <input class="register_form_email" type="email" name="email" id="email" value="{{ old('email') }}">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                            <span class="material-icons">lock</span>
                            <label class="register_from_item_label" for="password">Password</label>
                            <input class="register_form_password" type="password" name="password" id="password">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                            <span class="material-icons">check</span>
                            <label class="register_from_item_label" for="confirm_password">Confirm</label>
                            <input class="register_form_confirm" type="password" name="password_confirmation" id="confirm_password">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_submit">
                            <input class="register_form_button" type="submit" value="登録"></input>
                        </td>
                    </tr>
                </form>    
            </tbody>
        </table>
    </div>
</div>
@endsection