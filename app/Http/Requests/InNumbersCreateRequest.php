<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InNumbersCreateRequest extends FormRequest
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
            'title_uz'=> 'required|string|max:255',
            'title_ru'=> 'string|nullable|max:255',
            'title_en'=> 'string|nullable|max:255',

            'sub_title_uz'=> 'required|string|max:255',
            'sub_title_ru'=> 'string|nullable|max:255',
            'sub_title_en'=> 'string|nullable|max:255',

            'value'=> 'required|numeric|between:0.01,100.00',

            'image' => 'required|string',
            'is_active' => 'boolean',
        ];
    }
}
