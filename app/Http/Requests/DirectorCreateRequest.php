<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectorCreateRequest extends FormRequest
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
            'job_title_uz' => 'required|string',
            'job_title_ru' => 'string|nullable',
            'job_title_en' => 'string|nullable',

            'fullname_uz' => 'required|string',
            'fullname_ru' => 'string|nullable',
            'fullname_en' => 'string|nullable',

            'biography_uz' => 'required|string',
            'biography_ru' => 'string|nullable',
            'biography_en' => 'string|nullable',

            'obligation_uz' => 'required|string',
            'obligation_ru' => 'string|nullable',
            'obligation_en' => 'string|nullable',

            'activity_uz' => 'required|string',
            'activity_ru' => 'string|nullable',
            'activity_en' => 'string|nullable',

            'image' => 'required|string',
            'phone' => 'required|string',
            'reception_times' => 'required|string',

            'fb_link' => 'string|nullable',
            'tw_link' => 'string|nullable',
            'ig_link' => 'string|nullable',
            'in_link' => 'string|nullable',
            'yt_link' => 'string|nullable',

        ];
    }
}
