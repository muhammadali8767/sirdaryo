<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaticPageCreateRequest extends FormRequest
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
            'title_ru'=> 'nullable|string|max:255',
            'title_en'=> 'nullable|string|max:255',

            'sub_title_uz'=> 'nullable|string',
            'sub_title_ru'=> 'nullable|string',
            'sub_title_en'=> 'nullable|string',

            'text_uz' => 'required|string',
            'text_ru' => 'nullable|string',
            'text_en' => 'nullable|string',
        ];
    }
}
