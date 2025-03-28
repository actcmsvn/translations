<?php

return [
    'accepted' => 'Вы должны принять :attribute.',
    'accepted_if' => 'Вы должны принять :attribute, когда :other соответствует :value.',
    'active_url' => 'Значение поля :attribute не является действительным URL.',
    'after' => 'Значение поля :attribute должно быть датой после :date.',
    'after_or_equal' => 'Значение поля :attribute должно быть датой после или равной :date.',
    'alpha' => 'Значение поля :attribute может содержать только буквы.',
    'alpha_dash' => 'Значение поля :attribute может содержать только буквы, цифры, дефис и нижнее подчеркивание.',
    'alpha_num' => 'Значение поля :attribute может содержать только буквы и цифры.',
    'array' => 'Значение поля :attribute должно быть массивом.',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'Значение поля :attribute должно быть датой до :date.',
    'before_or_equal' => 'Значение поля :attribute должно быть датой до или равной :date.',
    'between' => [
        'array' => 'Количество элементов в поле :attribute должно быть между :min и :max.',
        'file' => 'Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).',
        'numeric' => 'Значение поля :attribute должно быть между :min и :max.',
        'string' => 'Количество символов в поле :attribute должно быть между :min и :max.',
    ],
    'boolean' => 'Значение поля :attribute должно быть логического типа.',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed' => 'Значение поля :attribute не совпадает с подтверждаемым.',
    'current_password' => 'Неверный пароль!',
    'date' => 'Значение поля :attribute не является датой.',
    'date_equals' => 'Значение поля :attribute должно быть датой равной :date.',
    'date_format' => 'Значение поля :attribute не соответствует формату даты :format.',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, когда :other равно :value.',
    'different' => 'Значения полей :attribute и :other должны различаться.',
    'digits' => 'Длина значения цифрового поля :attribute должна быть :digits.',
    'digits_between' => 'Длина значения цифрового поля :attribute должна быть между :min и :max.',
    'dimensions' => 'Изображение в поле :attribute имеет недопустимые размеры.',
    'distinct' => 'Значения поля :attribute не должны повторяться.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'Значение поля :attribute должно быть действительным электронным адресом.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений: :values',
    'enum' => 'Выбранное значение для :attribute некорректно.',
    'exists' => 'Выбранное значение для :attribute некорректно.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'В поле :attribute должен быть указан файл.',
    'filled' => 'Поле :attribute обязательно для заполнения.',
    'gt' => [
        'array' => 'Количество элементов в поле :attribute должно быть больше :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше :value Килобайт(а).',
        'numeric' => 'Значение поля :attribute должно быть больше :value.',
        'string' => 'Количество символов в поле :attribute должно быть больше :value.',
    ],
    'gte' => [
        'array' => 'Количество элементов в поле :attribute должно быть :value или больше.',
        'file' => 'Размер файла в поле :attribute должен быть :value Килобайт(а) или больше.',
        'numeric' => 'Значение поля :attribute должно быть :value или больше.',
        'string' => 'Количество символов в поле :attribute должно быть :value или больше.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'Файл в поле :attribute должен быть изображением.',
    'in' => 'Выбранное значение для :attribute некорректно.',
    'in_array' => 'Значение поля :attribute не существует в :other.',
    'integer' => 'Значение поля :attribute должно быть целым числом.',
    'ip' => 'Значение поля :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Значение поля :attribute должно быть действительным IPv4-адресом.',
    'ipv6' => 'Значение поля :attribute должно быть действительным IPv6-адресом.',
    'json' => 'Значение поля :attribute должно быть JSON строкой.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'Количество элементов в поле :attribute должно быть меньше :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше :value Килобайт(а).',
        'numeric' => 'Значение поля :attribute должно быть меньше :value.',
        'string' => 'Количество символов в поле :attribute должно быть меньше :value.',
    ],
    'lte' => [
        'array' => 'Количество элементов в поле :attribute должно быть :value или меньше.',
        'file' => 'Размер файла в поле :attribute должен быть :value Килобайт(а) или меньше.',
        'numeric' => 'Значение поля :attribute должно быть :value или меньше.',
        'string' => 'Количество символов в поле :attribute должно быть :value или меньше.',
    ],
    'mac_address' => 'Значение поля :attribute должно быть корректным MAC-адресом.',
    'max' => [
        'array' => 'Количество элементов в поле :attribute не может превышать :max.',
        'file' => 'Размер файла в поле :attribute не может быть больше :max Килобайт(а).',
        'numeric' => 'Значение поля :attribute не может быть больше :max.',
        'string' => 'Количество символов в поле :attribute не может превышать :max.',
    ],
    'max_digits' => 'Кол-во символов поля :attribute не должно превышать :max знаков',
    'mimes' => 'Файл в поле :attribute должен быть одного из следующих типов: :values.',
    'mimetypes' => 'Файл в поле :attribute должен быть одного из следующих типов: :values.',
    'min' => [
        'array' => 'Количество элементов в поле :attribute должно быть не меньше :min.',
        'file' => 'Размер файла в поле :attribute должен быть не меньше :min Килобайт(а).',
        'numeric' => 'Значение поля :attribute должно быть не меньше :min.',
        'string' => 'Количество символов в поле :attribute должно быть не меньше :min.',
    ],
    'min_digits' => 'Поле :attribute должно содержать не менее :min знаков',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'Значение поля :attribute должно быть кратным :value',
    'not_in' => 'Выбранное значение для :attribute некорректно.',
    'not_regex' => 'Значение поля :attribute некорректно.',
    'numeric' => 'Значение поля :attribute должно быть числом.',
    'password' => [
        'letters' => 'Поле :attribute должно содержать хотя бы одну букву.',
        'mixed' => 'Поле :attribute должно содержать хотя бы одну заглавную и одну обычную букву.',
        'numbers' => 'Поле :attribute должно содержать хотя бы одну цифру',
        'symbols' => 'Поле :attribute должно содержать хотя бы один символ',
        'uncompromised' => 'Содержание поля :attribute появлялось в общеизвестных утечках данных. Выберите другое значение для :attribute.',
    ],
    'present' => 'Значение поля :attribute должно присутствовать.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'Значение поля :attribute запрещено.',
    'prohibited_if' => 'Значение поля :attribute запрещено, когда :other равно :value.',
    'prohibited_unless' => 'Значение поля :attribute запрещено, если :other не состоит в :values.',
    'prohibits' => 'Значение поля :attribute запрещает присутствие :other.',
    'regex' => 'Значение поля :attribute некорректно.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_array_keys' => 'Массив в поле :attribute обязательно должен иметь ключи: :values',
    'required_if' => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'Поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with' => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all' => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without' => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same' => 'Значения полей :attribute и :other должны совпадать.',
    'size' => [
        'array' => 'Количество элементов в поле :attribute должно быть равным :size.',
        'file' => 'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'numeric' => 'Значение поля :attribute должно быть равным :size.',
        'string' => 'Количество символов в поле :attribute должно быть равным :size.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих значений: :values',
    'string' => 'Значение поля :attribute должно быть строкой.',
    'timezone' => 'Значение поля :attribute должно быть действительным часовым поясом.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Загрузка поля :attribute не удалась.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'Значение поля :attribute имеет ошибочный формат URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'Значение поля :attribute должно быть корректным UUID.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes' => [],
];
