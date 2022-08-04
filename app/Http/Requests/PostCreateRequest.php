<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title_uz'=> 'required|string',
            'title_ru'=> 'string',
            'title_en'=> 'string',

            'short_uz' => 'required|string',
            'short_ru' => 'string',
            'short_en' => 'string',

            'text_uz' => 'required|string',
            'text_ru' => 'string',
            'text_en' => 'string',

            'img' => 'required|image',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
