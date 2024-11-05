@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                            {{-- email アイコン --}}
                            <label for="email">Email</label>
                            <input class="login_form_email" type="email" name="email" id="email" value="{{ old('email') }}" >>
                        </td>
                    </tr>
                    <tr class="login_form_item_table">
                        <td class="login_form_item_header">
                            {{-- password アイコン --}}
                            <label for="password">Password</label>
                            <input class="login_form_password" type="password" name="password" id="password">
                        </td>
                    </tr>
                    <tr class="login_form_item_table">
                        <td class="login_form_submit">
                            <button class="login_form_button" type="submit">ログイン</button>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
</div>
@endsection