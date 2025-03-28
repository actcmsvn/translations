<?php

return [
    'name' => 'المواقع',
    'all_states' => 'كل المقاطعات',
    'abbreviation' => 'اختصار',
    'abbreviation_placeholder' => 'على سبيل المثال: كاليفورنيا',
    'enums' => [
        'import_type' => [
            'country' => 'دولة',
            'state' => 'ولاية',
            'city' => 'مدينة',
        ],
    ],
    'export' => [
        'total' => 'إجمالي المواقع',
        'total_countries' => 'إجمالي البلدان',
        'total_states' => 'إجمالي الولايات',
        'total_cities' => 'إجمالي المدن',
        'description' => 'قم بتصدير بيانات موقعك مثل البلدان والولايات والمدن.',
    ],
    'import' => [
        'description' => 'يمكنك استيراد بيانات الموقع بسهولة من البيانات المتاحة أو عن طريق تحميل ملف CSV/Excel.',
        'rules' => [
            'name' => 'اسم الموقع إلزامي ويجب ألا يتجاوز 120 حرفًا.',
            'slug' => 'يجب ألا يتجاوز رمز الموقع، إذا تم توفيره، 120 حرفًا.',
            'import_type' => 'يعد نوع الاستيراد إلزاميًا ويجب أن يكون أحد القيم المحددة مسبقًا.',
            'order' => 'يجب أن يكون ترتيب الموقع، إذا تم توفيره، عددًا صحيحًا موجبًا بين 0 و127.',
            'abbreviation' => 'يجب ألا يتجاوز اختصار الموقع، إذا تم توفيره، 10 أحرف.',
            'status' => 'حالة الموقع إلزامية ويجب أن تكون إحدى القيم المحددة مسبقًا.',
            'country' => 'حقل البلد إلزامي إذا كان نوع الاستيراد ولاية أو مدينة.',
            'state' => 'حقل الولاية إلزامي إذا كان نوع الاستيراد مدينة.',
            'nationality' => 'يجب ألا تتجاوز جنسية الموقع، إذا تم توفيرها، 120 حرفًا.',
        ],
    ],
];
