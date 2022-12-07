<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeadOfSecretariatCreateRequest extends FormRequest
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
            'fullname_uz' => 'required|string',
            'fullname_ru' => 'string|nullable',
            'fullname_en' => 'string|nullable',

            'okrug_uz' => 'required|string',
            'okrug_ru' => 'string|nullable',
            'okrug_en' => 'string|nullable',
        ];
    }
}