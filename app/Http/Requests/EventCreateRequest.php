<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventCreateRequest extends FormRequest
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
            'title_uz' => 'required|string',
            'title_ru' => 'string|nullable',
            'title_en' => 'string|nullable',

            'event_time' => 'required|date',
            'is_active' => 'boolean',
        ];
    }
}
