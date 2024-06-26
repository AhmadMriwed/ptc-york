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

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما :other يكون :value.',
    'active_url' => 'حقل :attribute يجب أن يحتوي على رابط URL صالح.',
    'after' => 'حقل :attribute يجب أن يكون تاريخًا بعد :date.',
    'after_or_equal' => 'حقل :attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
    'alpha' => 'حقل :attribute يجب أن يحتوي على أحرف فقط.',
    'alpha_dash' => 'حقل :attribute يجب أن يحتوي على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'حقل :attribute يجب أن يحتوي على أحرف وأرقام فقط.',
    'array' => 'حقل :attribute يجب أن يكون مصفوفة.',
    'ascii' => 'حقل :attribute يجب أن يحتوي على أحرف ألفبائية من بت أحادي البايت ورموزًا فقط.',
    'before' => 'حقل :attribute يجب أن يكون تاريخًا قبل :date.',
    'before_or_equal' => 'حقل :attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
    'between' => [
        'array' => 'حقل :attribute يجب أن يحتوي على بين :min و :max عنصر.',
        'file' => 'حقل :attribute يجب أن يكون بين :min و :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون بين :min و :max.',
        'string' => 'حقل :attribute يجب أن يكون بين :min و :max حرف.',
    ],
    'boolean' => 'حقل :attribute يجب أن يكون صحيحًا أو خاطئًا.',
    'can' => 'القيمة في حقل :attribute غير مصرّح بها.',
    'confirmed' => 'تأكيد حقل :attribute لا يتطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'حقل :attribute يجب أن يحتوي على تاريخ صالح.',
    'date_equals' => 'حقل :attribute يجب أن يكون تاريخا مساويا لـ :date.',
    'date_format' => 'حقل :attribute يجب أن يتطابق مع الشكل :format.',
    'decimal' => 'حقل :attribute يجب أن يحتوي على :decimal أماكن عشرية.',
    'declined' => 'حقل :attribute يجب أن يتم رفضه.',
    'declined_if' => 'حقل :attribute يجب أن يتم رفضه عندما :other يكون :value.',
    'different' => 'حقل :attribute و:other يجب أن يكونوا مختلفين.',
    'digits' => 'حقل :attribute يجب أن يحتوي على :digits أرقام.',
    'digits_between' => 'حقل :attribute يجب أن يحتوي على بين :min و :max أرقام.',
    'dimensions' => 'الصورة في حقل :attribute تحتوي على أبعاد غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'حقل :attribute يجب ألا ينتهي بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'حقل :attribute يجب ألا يبدأ بأحد القيم التالية: :values.',
    'email' => 'حقل :attribute يجب أن يحتوي على عنوان بريد إلكتروني صالح.',
    'ends_with' => 'حقل :attribute يجب أن ينتهي بأحد القيم التالية: :values.',
    'enum' => 'القيمة المختارة في حقل :attribute غير صالحة.',
    'exists' => 'القيمة المختارة في حقل :attribute غير صالحة.',
    'file' => 'حقل :attribute يجب أن يحتوي على ملف.',
    'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'array' => 'حقل :attribute يجب أن يحتوي على أكثر من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'حقل :attribute يجب أن يحتوي على أكثر من :value حرف.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :value عنصر أو أكثر.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يحتوي حقل :attribute على :value حرف أو أكثر.',
    ],
    'image' => 'يجب أن يكون حقل :attribute صورة.',
    'in' => 'القيمة المحددة في :attribute غير صالحة.',
    'in_array' => 'حقل :attribute يجب أن يكون موجودًا في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عبارة عن عدد صحيح.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صالح.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صالح.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صالح.',
    'json' => 'يجب أن يكون حقل :attribute عبارة عن نص JSON صالح.',
    'lowercase' => 'يجب أن يكون حقل :attribute بالأحرف الصغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصر.',
        'file' => 'يجب أن يكون حجم ملف :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من :value.',
        'string' => 'يجب أن يحتوي حقل :attribute على أقل من :value حرف.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حجم ملف :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من أو يساوي :value.',
        'string' => 'يجب أن يحتوي حقل :attribute على أقل من أو يساوي :value حرف.',
    ],
    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالح.',
    'max' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max عنصر.',
        'file' => 'يجب ألا يتجاوز حجم ملف :attribute :max كيلوبايت.',
        'numeric' => 'يجب ألا يتجاوز حقل :attribute القيمة :max.',
        'string' => 'يجب ألا يتجاوز حقل :attribute :max حرفًا.',
    ],
    'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max أرقام.',
    'mimes' => 'يجب أن يكون حقل :attribute ملف من النوع: :values.',
    'mimetypes' => 'يجب أن يكون حقل :attribute ملف من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عنصر.',
        'file' => 'يجب أن يكون حجم ملف :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute على الأقل :min.',
        'string' => 'يجب أن يحتوي حقل :attribute على الأقل :min حرفًا.',
    ],
    'min_digits' => 'يجب أن يحتوي حقل :attribute على الأقل :min أرقام.',
    'missing' => 'يجب أن يكون حقل :attribute مفقودًا.',
    'missing_if' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون حقل :attribute مفقودًا ما لم يكن :other هو :value.',
    'missing_with' => 'يجب أن يكون حقل :attribute مفقودًا عندما تكون :values موجودة.',
    'missing_with_all' => 'يجب أن يكون حقل :attribute مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفًا للقيمة :value.',
    'not_in' => 'القيمة المحددة في :attribute غير صالحة.',
    'not_regex' => 'تنسيق حقل :attribute غير صالح.',
    'numeric' => 'يجب أن يكون حقل :attribute عبارة عن رقم.',
    'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على الأقل حرف واحد.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على عدد واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'ال:attribute المُعطى قد ظهر في تسريب بيانات. الرجاء اختيار:attribute مختلف.',
    ],
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'prohibited' => 'حقل :attribute ممنوع.',
    'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute ممنوع ما لم يكن :other موجودًا في :values.',
    'prohibits' => 'حقل :attribute يمنع وجود :other.',
    'regex' => 'تنسيق حقل :attribute غير صالح.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي حقل :attribute على مفاتيح للعناصر: :values.',
    'required_if' => 'يجب أن يكون حقل :attribute مطلوبًا عندما يكون :other هو :value.',
    'required_if_accepted' => 'يجب أن يكون حقل :attribute مطلوبًا عندما يتم قبول :other.',
    'required_unless' => 'يجب أن يكون حقل :attribute مطلوبًا ما لم يكن :other موجودًا في :values.',
    'required_with' => 'يجب أن يكون حقل :attribute مطلوبًا عندما تكون :values موجودة.',
    'required_with_all' => 'يجب أن يكون حقل :attribute مطلوبًا عندما تكون :values موجودة.',
    'required_without' => 'يجب أن يكون حقل :attribute مطلوبًا عندما لا تكون :values موجودة.',
    'required_without_all' => 'يجب أن يكون حقل :attribute مطلوبًا عندما لا تكون أي من :values موجودة.',
    'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :size عنصر.',
        'file' => 'يجب أن يكون حجم ملف :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute :size.',
        'string' => 'يجب أن يكون حقل :attribute :size حرفًا.',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بواحد من القيم التالية: :values.',
    'string' => 'يجب أن يكون حقل :attribute عبارة عن نص.',
    'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',
    'unique' => 'ال:attribute مأخوذ بالفعل.',
    'uploaded' => 'فشل تحميل ال:attribute.',
    'uppercase' => 'يجب أن يكون حقل :attribute بالأحرف الكبيرة.',
    'url' => 'يجب أن يكون حقل :attribute عنوان URL صالح.',
    'ulid' => 'يجب أن يكون حقل :attribute ULID صالح.',
    'uuid' => 'يجب أن يكون حقل :attribute UUID صالح.',

    'invalid_location' => 'حقل :attribute غير صالح.',
    'invalid_latitude' => 'حقل :attribute.latitude غير صالح.',
    'invalid_longitude' => 'حقل :attribute.longitude غير صالح.',
    'invalid_address' => 'حقل :attribute.address غير صالح.',
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

    'attributes' => [
        'title' => 'العنوان',
        'description' => 'الوصف',
        'image' => 'الصورة',
        'sub_title' => 'العنوان الفرعي',
        'fee' => 'الرسوم',
        'outlines' => 'المخططات',
        'start_date' => 'تاريخ البدء',
        'end_date' => 'تاريخ الانتهاء',
        'houres' => 'عدد الساعات',
        'lang' => 'اللغة',
        'code' => 'الكود',
        'change_active_date' => 'تغيير تاريخ النشاط',
        'category_id' => 'فئة الدورة',
        'venue_id' => 'المكان',
        'active' => 'الحالة',
        'code' => 'الكود',
        'title' => 'العنوان',
        'sub_title' => 'العنوان الفرعي',
        'start_date' => 'تاريخ البدء',
        'end_date' => 'تاريخ الانتهاء',
        'houres' => 'عدد الساعات',
        'change_active_date' => 'تغيير تاريخ النشاط',
        'fee' => 'الرسوم',
        'description' => 'الوصف',
        'outlines' => 'المخططات',
        'lang' => 'اللغة',
        'img' => 'الصورة',
        'venue_id' => 'معرف المكان',
        'category_id' => 'معرف الفئة',
        'course_ads_id' => 'معرف إعلان الدورة',
        'submit_courses_id' => 'معرف الدورة المقدمة',
        'location' => 'الموقع',
        'lang' => 'اللغة',
        'start_date' => 'تاريخ البدء',
        'end_date' => 'تاريخ الانتهاء',
        'code' => 'الكود',
        'title' => 'العنوان',
        'active' => 'الحالة',
        'validate' => 'التحقق',
        'venue_ids.*' => 'معرف الموقع',
        'venue_ids' => 'معرفات المواقع',
        'category_ids' => 'معرفات الفئات',
        'category_ids.*' => 'معرف الفئة',
        'months.*' => 'الشهر',
        'months' => 'الأشهر',
        'years.*' => 'العام',
        'years' => 'الأعوام',
        'title' => 'العنوان',
        'description' => 'الوصف',
        'image' => 'الصورة',
        'sub_title' => 'العنوان الفرعي',
        'fee' => 'الرسوم',
        'outlines' => 'المحتوى',
        'start_date' => 'تاريخ البدء',
        'end_date' => 'تاريخ الانتهاء',
        'houres' => 'الساعات',
        'lang' => 'اللغة',
        'code' => 'الكود',
        'change_active_date' => 'تاريخ التغيير في الحالة',
        'active' => 'الحالة',
        'code' => 'الكود',
        'title' => 'العنوان',
        'sub_title' => 'العنوان الفرعي',
        'start_date' => 'تاريخ البدء',
        'end_date' => 'تاريخ الانتهاء',
        'houres' => 'الساعات',
        'change_active_date' => 'تاريخ التغيير في الحالة',
        'fee' => 'الرسوم',
        'description' => 'الوصف',
        'outlines' => 'المحتوى',
        'lang' => 'اللغة',
        'img' => 'الصورة',
        'venue_id' => 'المكان',
        'category_id' => 'الفئة',
        'course_ads_id' => 'إعلان الدورة',
        'submit_courses_id' => 'الدورات المقدمة',

        'email' => 'البريد الإلكتروني',
        'password' => 'كلمة المرور',
        'price' => 'السعر',
    'title' => 'العنوان',
    'sub_title' => 'العنوان الفرعي',
    'start_date' => 'تاريخ البدء',
    'end_date' => 'تاريخ الانتهاء',
    'houres' => 'الساعات',
    'change_active_date' => 'تغيير تاريخ النشاط',
    'fee' => 'الرسوم',
    'description' => 'الوصف',
    'outlines' => 'المخطط',
    'lang' => 'اللغة',
    'img' => 'الصورة',
    'venue_id' => 'المكان',
    'category_id' => 'الفئة',
    'course_ads_id' => 'إعلان الدورة',
    'submit_courses_id' => 'إعلان الدورة',
    'currencies_id' => 'العملة',
    'location' => 'الموقع',
  
    'first_name' => 'الاسم الأول',
    'last_name' => 'اسم العائلة',
    'email' => 'البريد الإلكتروني',
    'phone_number' => 'رقم الهاتف',
    'gender' => 'الجنس',
    'image' => 'الصورة',
    'birth_date' => 'تاريخ الميلاد',
    'about_me' => 'نبذة عني',
    'language' => 'اللغة',
    'job_type' => 'نوع الوظيفة',
    'currency' => 'العملة',
    'flag' => 'العلم',
    'amount' => 'المبلغ',
    'code' => 'الرمز',
    'old_password' => 'كلمة المرور القديمة',
    'new_password' => 'كلمة المرور الجديدة',
    'session_id' => 'معرف الجلسة',
    'left_time' => 'الوقت المتبقي',
    'attend_time' => 'وقت الحضور',
    'exam_id' => 'معرف الامتحان',
    'session_id' => 'معرف الجلسة',
    'date_from' => 'تاريخ البدء',
    'date_to' => 'تاريخ الانتهاء',
    'date_change' => 'تاريخ التغيير',
    'status' => 'الحالة',
    'course_id' => 'معرف الدورة',
    'outline' => 'المخطط',
    'title' => 'العنوان',
    'name' => 'الاسم',
    'type' => 'النوع',
    'config_exams' => 'اعدادات الامتحان',
    'condition_exams_id' => 'معرف اختبار الشرط',
    'time_exam' => 'وقت الامتحان',
    'view_results' => 'عرض النتائج',
    'date_view' => 'تاريخ العرض',
    'count_quastions_page' => 'عدد الأسئلة في الصفحة',
    'time_quastions_page' => 'وقت الصفحة',
    'required_page_next' => 'صفحة مطلوبة للانتقال',
    'count_return_exam' => 'عدد مرات العودة للامتحان',
    'view_answer' => 'عرض الإجابات',
    'condition_exams' => 'اختبارات الشرط',
    'course_id' => 'معرف الدورة',
    'owner_id' => 'معرف المالك',
    'sub_title' => 'العنوان الفرعي',
    'title' => 'العنوان',
    'image' => 'الصورة',
    'exam_type_id' => 'معرف نوع الامتحان',
    'type' => 'النوع',
    'description' => 'الوصف',
    'hint' => 'تلميح',
    'form_id' => 'معرف النموذج',
    'url' => 'الرابط',
    'show_configration' => 'عرض التكوين',
    'show_condition' => 'عرض الشرط',
    'exam_id' => 'معرف الامتحان',
    'start_form.sub_title' => 'العنوان الفرعي للنموذج البدء',
    'start_form.description' => 'وصف النموذج البدء',
    'start_form.title' => 'عنوان النموذج البدء',
    'start_form.show_configration' => 'عرض التكوين للنموذج البدء',
    'start_form.show_condition' => 'عرض الشرط للنموذج البدء',
    'start_form.image' => 'صورة النموذج البدء',
    'end_form.sub_title' => 'العنوان الفرعي للنموذج النهاية',
    'end_form.description' => 'وصف النموذج النهاية',
    'end_form.title' => 'عنوان النموذج النهاية',
    'end_form.url' => 'الرابط للنموذج النهاية',
    'end_form.image' => 'صورة النموذج النهاية',
    'request_id' => 'معرف الطلب',
    'recived_id' => 'معرف المستلم',
    'request_type_id' => 'معرف نوع الطلب',
    'files' => 'الملفات',
    'type' => 'النوع',
    'text' => 'النص',
    'category_ids' => 'معرفات الفئات',
    'venue_ids' => 'معرفات الأماكن',
    'start_date' => 'تاريخ البدء',
    'title' => 'العنوان',
    'code' => 'الكود',
    'end_date' => 'تاريخ الانتهاء',
    'lang' => 'اللغة',
    'months' => 'الشهور',
    'years' => 'السنوات',
    'category_id' => 'معرف الفئة',
    'venue_id' => 'معرف المكان',
    'language' => 'اللغة',
    'fee' => 'الرسوم',
    'name' => 'الاسم',
    'email' => 'البريد الإلكتروني',
    'url' => 'الرابط',
    'job_title' => 'الوظيفة',
    'cv_trainer' => 'السيرة الذاتية للمدرب',
    'num_people' => 'عدد الأشخاص',
    'description' => 'الوصف',
    'entity_type' => 'نوع الكيان',
    'selection_trainer' => 'اختيار المدرب',
    'trainer_type_id' => 'معرف نوع المدرب',
    'lat' => 'خط العرض',
    'lag' => 'خط الطول',
    'phone_number' => 'رقم الهاتف',
    'image' => 'الصورة',
    'birth_date' => 'تاريخ الميلاد',
    'about_me' => 'نبذة عني',
    'status' => 'الحالة',
    'cuase' => 'السبب',
    'trainer_id' => 'معرف المدرب',
    'user_id' => 'معرف المستخدم',
    'permission' => 'الصلاحية',
    'courses_id' => 'معرف الدورة',
    'client_id' => 'معرف العميل',
    'status' => 'الحالة',
    'date_accept' => 'تاريخ القبول',
    'user_id' => 'معرف المستخدم',
    'status' => 'الحالة',
    'date_accept' => 'تاريخ القبول',
    'date_reject' => 'تاريخ الرفض',
    'cv_file' => 'ملف السيرة الذاتية',
    'courses_id' => 'معرف الدورة',
    'trainers_id' => 'معرف المدرب',
    'status' => 'الحالة',
    'date_accept' => 'تاريخ القبول',
    'date_reject' => 'تاريخ الرفض',


    ],

];
