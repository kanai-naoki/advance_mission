<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Orner;

class OrnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'shop_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '※氏名を入力してください',
            'shop_name.required' => '※店舗名を入力してください',
        ];
    }
}
