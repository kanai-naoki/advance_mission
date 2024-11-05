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
                <form action="{{ route('register') }}" method="post">
                @csrf
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                           {{-- username アイコン --}}
                            <label for="name">Username</label>
                            <input class="register_form_name" type="text" name="name" id="name" value="{{ old('name') }}">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                            {{-- email アイコン --}}
                            <label for="email">Email</label>
                            <input class="register_form_email" type="email" name="email" id="email" value="{{ old('email') }}">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                            {{-- password アイコン --}}
                            <label for="password">Password</label>
                            <input class="register_form_password" type="password" name="password" id="password">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_item_header">
                            {{-- 確認 アイコン --}}
                            <label for="confirm_password">Confirm</label>
                            <input class="register_form_confirm" type="password" name="confirm_password" id="confirm_password">
                        </td>
                    </tr>
                    <tr class="register_form_item_table">
                        <td class="register_form_submit">
                            <button class="register_form_button" type="submit">登録</button>
                        </td>
                    </tr>
                </form>    
            </tbody>
        </table>
    </div>
</div>
@endsection