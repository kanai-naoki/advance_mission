<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // 会員登録完了画面
    public function register_thanks()
    {
        return view('auth.thanks');
    }

    // ログイン画面
    public function login_page()
    {
        return view('auth.login');
    }
}
