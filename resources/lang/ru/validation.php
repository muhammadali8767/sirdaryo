<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accept' => 'Поле :attribute должен быть принят.',
    'active_url' => 'Поле :attribute не является допустимым URL.',
    'after' => 'Поле :attribute должен быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должен быть датой после или равной :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры, дефисы и подчеркивания.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должен быть массивом.',
    'before' => 'Поле :attribute должен быть датой до :date.',
    'before_or_equal' => 'Поле :attribute должен быть датой до или равной :date.',
    'between' => [
        'numeric' => 'Поле :attribute должен быть между :min и :max.',
        'file' => 'Поле :attribute должен находиться в диапазоне от :min до :max килобайт.',
        'string' => 'Поле :attribute должен содержать символы :min и :max.',
        'array' => 'Поле :attribute должен содержать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'Verified' => 'Подтверждение :attribute не совпадает.',
    'date' => 'Поле :attribute не является допустимой датой.',
    'date_equals' => 'Поле :attribute должен быть датой, равной :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'different' => 'Поле :attribute и :other должны быть разными.',
    'digits' => 'Поле :attribute должен быть :digits цифр.',
    'digits_between' => 'Поле :attribute должен быть между :min и :max цифрами.',
    'sizes' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'Different' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => 'Поле :attribute должен быть действующим адресом электронной почты.',
    'end_with' => 'Поле :attribute должен заканчиваться одним из следующих :value.',
    'exists' => 'Выбранный поле :attribute недействителен.',
    'file' => 'Поле :attribute должен быть файлом.',
    'fill' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'Поле :attribute должен быть больше, чем :value.',
        'file' => 'Поле :attribute должен быть больше, чем :value в килобайтах.',
        'string' => 'Поле :attribute должен быть больше, чем символов :value.',
        'array' => 'Поле :attribute должен иметь более :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должен быть больше или равен :value.',
        'file' => 'Поле :attribute должен быть больше или равен :value в килобайтах.',
        'string' => 'Поле :attribute должен быть больше или равен :value символов.',
        'array' => 'Поле :attribute должен иметь :value значения или более.',
    ],
    'image' => 'Поле :attribute должен быть изображением.',
    'in' => 'выбранный :attribute недействителен.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должен быть целым числом.',
    'ip' => 'Поле :attribute должен быть действительным IP-адресом.',
    'ipv4' => 'Поле :attribute должен быть действительным IPv4-адресом.',
    'ipv6' => 'Поле :attribute должен быть действительным IPv6-адресом.',
    'json' => 'Поле :attribute должен быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => 'Поле :attribute должен быть меньше :value.',
        'file' => 'Поле :attribute должен быть меньше :value килобайт.',
        'string' => 'Поле :attribute должен содержать меньше символов :value.',
        'array' => 'Поле :attribute должен содержать меньше :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должен быть меньше или равен :value.',
        'file' => 'Поле :attribute должен быть меньше или равен :value в килобайтах.',
        'string' => 'Поле :attribute должен быть меньше или равен :value символов.',
        'array' => 'Поле :attribute не может содержать более :value элементов.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не может быть больше, чем :max.',
        'file' => 'Поле :attribute не может быть больше :max килобайт.',
        'string' => 'Поле :attribute не может быть больше, чем :max. символов.',
        'array' => 'Поле :attribute не может содержать более :max элементов.',
    ],
    'mimes' => 'Поле :attribute должен быть файлом типа: :values.',
    'mimetypes' => 'Поле :attribute должен быть файлом типа: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должен быть не меньше :min.',
        'file' => 'Поле :attribute должен быть не меньше :min килобайт.',
        'string' => 'Поле :attribute должен содержать не менее :min символов.',
        'array' => 'Поле :attribute должен содержать как минимум :min элементов.',
    ],
    'multiple_of' => 'Поле :attribute должен быть кратным :value',
    'not_in' => 'Выбранный атрибут :attribute недействителен.',
    'not_regex' => 'Недействительный формат :attribute.',
    'numeric' => 'Поле :attribute должен быть числом.',
    'password' => 'Неверный пароль.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Недействительный формат :attribute.',
    'required' => 'Поле :attribute обязательно для заполнения.',

    'required_if' => 'Поле :attribute необходимо, когда :other равно на :value.',
    'required_unless' => 'Поле :attribute является обязательным, если :other не находится в :values.',
    'required_with' => 'Поле :attribute необходимо, если присутствует :values.',
    'required_with_all' => 'Поле :attribute необходимо, если :values присутствуют.',
    'required_without' => 'Поле :attribute необходимо, если :values не указан.',
    'required_without_all' => 'Поле :attribute является обязательным, если ни одно из :values не присутствует.',
    'same' => ':attribute и :other должны совпадать.',

    'size' => [
        'numeric' => 'Поле :attribute должен быть :size.',
        'file' => 'Поле :attribute должен быть :size килобайт.',
        'string' => 'Поле :attribute должен содержать :size символы.',
        'array' => 'Поле :attribute должен содержать :size элементы.',
    ],

    'start_with' => 'Поле :attribute должен начинаться с одного из следующих: :values.',
    'string' => 'Поле :attribute должен быть строкой.',
    'timezone' => 'Поле :attribute должен быть допустимой зоной.',
    'unique' => 'Поле :attribute уже занят.',
    'uploaded' => 'Поле :attribute не удалось загрузить.',
    'url' => 'Недопустимый формат поле :attribute.',
    'uuid' => 'Поле :attribute должен быть действительным UUID.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
