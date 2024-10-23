<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Book;

class BookRequest extends FormRequest
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
            'book_date' => 'required',
            'book_time' => 'required',
            'number' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'book_date.required' => '日付を入力してください',
            'book_time.required' => '時間を入力してください',
            'number.required' => '人数を入力してください',
        ];
    }
}
