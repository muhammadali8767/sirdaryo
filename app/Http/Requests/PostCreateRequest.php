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
            'title_uz'=> 'required|string|max:255',
            'title_ru'=> 'string|max:255',
            'title_en'=> 'string|max:255',

            'short_uz' => 'required|string|max:255',
            'short_ru' => 'string|max:255',
            'short_en' => 'string|max:255',

            'text_uz' => 'required|string|max:255',
            'text_ru' => 'string|max:255',
            'text_en' => 'string|max:255',

            'img' => 'required|image',
            'category_id' => 'required|exists:categoties,id'
        ];
    }
}
