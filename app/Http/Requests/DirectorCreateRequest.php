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
            'job_title_ru' => 'string',
            'job_title_en' => 'string',

            'fullname_uz' => 'required|string',
            'fullname_ru' => 'string',
            'fullname_en' => 'string',

            'biography_uz' => 'required|string',
            'biography_ru' => 'string',
            'biography_en' => 'string',

            'obligation_uz' => 'required|string',
            'obligation_ru' => 'string',
            'obligation_en' => 'string',

            'activity_uz' => 'required|string',
            'activity_ru' => 'string',
            'activity_en' => 'string',

            'phone' => 'required|string',
            'reception_times' => 'required|string',

            'fb_link' => 'string',
            'tw_link' => 'string',
            'ig_link' => 'string',
            'in_link' => 'string',
            'yt_link' => 'string',

        ];
    }
}
