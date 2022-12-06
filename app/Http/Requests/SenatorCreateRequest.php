<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SenatorCreateRequest extends FormRequest
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

            'job_and_position_uz' => 'required|string',
            'job_and_position_ru' => 'string|nullable',
            'job_and_position_en' => 'string|nullable',

            'party' => 'required|string',
        ];
    }
}
