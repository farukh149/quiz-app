<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MCQRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'correct_answer_no' => 'required',
        ];
    }
}
