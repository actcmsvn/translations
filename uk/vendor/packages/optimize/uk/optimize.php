<?php

return [
    'settings' => [
        'title' => 'Оптимізація',
        'description' => 'Мінімізуйте вихідний HTML, вбудуйте CSS, видаліть коментарі...',
        'enable' => 'Увімкнути оптимізацію швидкості сторінки?',
    ],
    'collapse_white_space' => 'Стискати пробіли',
    'collapse_white_space_description' => 'Цей фільтр зменшує кількість переданих байтів у HTML-файлі, видаляючи непотрібні пробіли.',
    'elide_attributes' => 'Скорочення атрибутів',
    'elide_attributes_description' => 'Цей фільтр зменшує розмір переданих HTML-файлів, видаляючи атрибути з тегів, коли вказане значення дорівнює значенню за замовчуванням для цього атрибута. Це може зберегти незначну кількість байтів і може зробити документ більш стислим, канонізуючи відповідні теги.',
    'inline_css' => 'Вбудований CSS',
    'inline_css_description' => 'Цей фільтр перетворює вбудований атрибут "style" тегів у класи, переміщуючи CSS у заголовок.',
    'insert_dns_prefetch' => 'Вставити попереднє DNS-запитування',
    'insert_dns_prefetch_description' => 'Цей фільтр додає теги в HEAD, щоб дозволити браузеру виконувати попереднє DNS-запитування.',
    'remove_comments' => 'Видалити коментарі',
    'remove_comments_description' => 'Цей фільтр видаляє HTML, JS і CSS коментарі. Фільтр зменшує розмір переданих HTML-файлів, видаляючи коментарі. Залежно від HTML-файлу, цей фільтр може значно зменшити кількість переданих по мережі байтів.',
    'remove_quotes' => 'Видалити лапки',
    'remove_quotes_description' => 'Цей фільтр видаляє непотрібні лапки з HTML-атрибутів. Хоча це вимагається різними специфікаціями HTML, браузери дозволяють їх пропускати, коли значення атрибута складається з певного підмножини символів (алфавітно-цифрові та деякі знаки пунктуації).',
    'defer_javascript' => 'Відкладене виконання JavaScript',
    'defer_javascript_description' => 'Відкладає виконання JavaScript у HTML. Якщо необхідно скасувати відкладення в певному скрипті, використовуйте data-pagespeed-no-defer як атрибут скрипту для скасування відкладення.',
];
