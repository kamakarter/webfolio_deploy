<?php

return [
    'required' => 'Поле :attribute обязательно для заполнения.',
    'string' => 'Поле :attribute должно быть строкой.',
    'email' => 'Поле :attribute должно быть действительным email адресом.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'min' => [
        'string' => 'Поле :attribute должно быть не менее :min символов.',
    ],
    'confirmed' => 'Поле :attribute не совпадает с подтверждением.',
    'max' => [
        'string' => 'Поле :attribute не должно превышать :max символов.',
    ],

    'attributes' => [
        'login' => 'логин',
        'email' => 'email',
        'password' => 'пароль',
        'password_confirmation' => 'подтверждение пароля',
    ],
];
