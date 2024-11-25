@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="login_content_area">
    <div class="login_form">
        <table class="table">
            <form action="{{ route('login') }}" method="post">
            @csrf
                <thead class="login_form_header">
                    <tr class="login_form_header_table">
                        <th class="login_form_header_txt">Login</th>
                    </tr>
                </thead>
                <tbody class="login_form_item">
                    <tr class="login_form_item_table">
                        <td class="login_form_item_header">
                            <span class="material-icons">mail</span>
                            <label class="login_from_item_label" for="email">Email</label>
                            <input class="login_form_email" type="email" name="email" id="email" value="{{ old('email') }}">    
                        </td>
                    </tr>
                    @error('email')
                    <tr class="login_form_item_table">
                        <td class="login_error_txt">
                            <p class="error_message" style="color: red">{{ $message }}</p>     
                        </td>
                    </tr>
                    @enderror
                    <tr class="login_form_item_table">
                        <td class="login_form_item_header">
                            <span class="material-icons">lock</span>
                            <label class="login_from_item_label" for="password">Password</label>
                            <input class="login_form_password" type="password" name="password" id="password">
                        </td>
                    </tr>
                    @error('password')
                    <tr class="login_form_item_table">
                        <td class="login_error_txt">
                            <p class="error_message" style="color: red">{{ $message }}</p>     
                        </td>
                    </tr>
                    @enderror
                    <tr class="login_form_item_table">
                        <td class="login_form_submit">
                            <input class="login_form_button" type="submit" value="ログイン"></input>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
</div>
@endsection