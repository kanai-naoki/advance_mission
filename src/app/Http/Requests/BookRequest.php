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
            'book_date' => 'required|after:yesterday',
            'book_time' => 'required|after:now+today',
        ];
    }

    public function messages()
    {
        return [
            'book_date.required' => '※日付を入力してください',
            'book_date.after' => '※今日以降の日付を入力してください',
            'book_time.after' => '※時間の入力に誤りがあります',
        ];
    }
}
