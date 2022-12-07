<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceptionCreateRequest extends FormRequest
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

            'job_title_uz' => 'required|string',
            'job_title_ru' => 'string|nullable',
            'job_title_en' => 'string|nullable',

            'reception_day' => 'required|string',
            'reception_time' => 'required|string',
        ];
    }
}
