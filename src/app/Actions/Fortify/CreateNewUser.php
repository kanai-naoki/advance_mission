<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string|max:191'],
            'email' => ['required',
                'email|string|max:191',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'password_confirmation' => 'required'
        ],
        [
            'name.required' => '※名前を入力してください',
            'name.string' => '※文字列で入力してください',
            'name.max' => '※191文字以内で入力してください',
            'email.required' => '※メールアドレスを入力してください',
            'email.email' => '※メールアドレス形式で入力してください',
            'email.string' => '※191文字以内で入力してください',
            'password.required' => '※パスワードを入力してください',
            'password.string' => '※文字列で入力してください',
            'password.min' => '※8文字以上で入力してください',
            'password.max' => '※191文字以内で入力してください',
            'password_confirmation.required' => '※もう一度パスワードを入力してください',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        return redirect('auth.thanks');
    }
}
