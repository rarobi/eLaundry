<?php

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

return [
    'accepted' => 'Энэ талбар нь Хүлээн авах естой.',
    'active_url' => 'Энэ нь хүчинтэй хаяг биш юм.',
    'after' => 'Энэ нь хойш огноо байх естой :date.',
    'after_or_equal' => 'Энэ нь хойш, эсвэл тэнцүү байх естой :date.',
    'alpha' => 'Энэ талбар нь зөвхөн захидал агуулж болно.',
    'alpha_dash' => 'Энэ талбар нь зөвхөн захидал, тоо, зураас ба тэмдэглэгээ агуулж болох юм.',
    'alpha_num' => 'Энэ талбар нь зөвхөн захидал болон дугааруудыг агуулж болох юм.',
    'array' => 'Энэ талбар нь массив байх естой.',
    'attached' => 'Энэ талбар нь аль хэдийн хавсаргасан байна.',
    'before' => 'Энэ нь өмнө нь өдөр байх естой :date.',
    'before_or_equal' => 'Энэ нь өмнө буюу тэнцүү байх естой :date.',
    'between' => [
        'array' => 'This content must have between :min and :max items.',
        'file' => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string' => 'This string must be between :min and :max characters.',
    ],
    'boolean' => 'Энэ талбар нь үнэн, худал байх естой.',
    'confirmed' => 'Баталгаа нь таарахгүй байна.',
    'date' => 'Энэ бол хүчинтэй хугацаа биш юм.',
    'date_equals' => 'Энэ нь :date-тай тэнцүү байх естой.',
    'date_format' => 'Энэ хэлбэр нь таарахгүй :format.',
    'different' => 'Энэ утга нь өөр байх естой :other.',
    'digits' => 'Энэ нь байх естой :digits тоо.',
    'digits_between' => 'Энэ хооронд байх естой :min, :max тоо.',
    'dimensions' => 'Энэ зураг нь хүчин төгөлдөр бус хэмжээ байна.',
    'distinct' => 'Энэ талбар нь давхардсан утгыг байна.',
    'email' => 'Энэ и-мэйл хаяг нь зөв байх естой.',
    'ends_with' => 'Энэ нь дараах аль нэгийг нь дуусгах естой: :values.',
    'exists' => 'Сонгосон утга буруу байна.',
    'file' => 'Агуулга нь файл байх естой.',
    'filled' => 'Энэ талбар нь утга байх естой.',
    'gt' => [
        'array' => 'The content must have more than :value items.',
        'file' => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string' => 'The string must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The content must have :value items or more.',
        'file' => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string' => 'The string must be greater than or equal :value characters.',
    ],
    'image' => 'Энэ нь зураг байх естой.',
    'in' => 'Сонгосон утга буруу байна.',
    'in_array' => 'Энэ утга нь байхгүй байна :other.',
    'integer' => 'Энэ нь бүхэл бүтэн байх естой.',
    'ip' => 'Энэ нь хүчинтэй ЦИ-ийн хаяг байх естой.',
    'ipv4' => 'Уг хаяг нь хүчинтэй ЦТ 4-ийн хаяг байх естой.',
    'ipv6' => 'Гэхдээ энэ нь ЦИ-гийн хүчинтэй хаяг байх естой.',
    'json' => 'Энэ нь жинхэнэ Жон мөр байх естой.',
    'lt' => [
        'array' => 'The content must have less than :value items.',
        'file' => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string' => 'The string must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The content must not have more than :value items.',
        'file' => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string' => 'The string must be less than or equal :value characters.',
    ],
    'max' => [
        'array' => 'The content may not have more than :max items.',
        'file' => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string' => 'The string may not be greater than :max characters.',
    ],
    'mimes' => 'Энэ төрлийн файл байх естой: :values.',
    'mimetypes' => 'Энэ төрлийн файл байх естой: :values.',
    'min' => [
        'array' => 'The value must have at least :min items.',
        'file' => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string' => 'The string must be at least :min characters.',
    ],
    'multiple_of' => 'Утга нь олон байх естой :value',
    'not_in' => 'Сонгосон утга буруу байна.',
    'not_regex' => 'Энэ хэлбэр нь хүчин төгөлдөр бус байна.',
    'numeric' => 'Энэ нь тоо байх естой.',
    'password' => 'Нууц үг буруу.',
    'present' => 'Энэ талбар нь байх естой.',
    'prohibited' => 'Энэ талбар нь хориглосон байна.',
    'prohibited_if' => ':other онд :value он байх үед энэ талбарт хориглоно.',
    'prohibited_unless' => 'Энэ талбар нь бол хориглосон байна :other онд байна :values.',
    'regex' => 'Энэ хэлбэр нь хүчин төгөлдөр бус байна.',
    'relatable' => 'Энэ талбар нь энэ нөөцийн холбоотой байж болох юм.',
    'required' => 'Энэ талбар нь шаардлагатай байна.',
    'required_if' => 'Энэ талбар нь шаардлагатай үед 305 байна :value.',
    'required_unless' => 'Энэ талбар нь бол шаардлагатай :other байна :values.',
    'required_with' => 'Энэ талбар нь шаардлагатай үед :values байгаа.',
    'required_with_all' => 'Энэ талбар нь :values байгаа үед шаардлагатай.',
    'required_without' => 'Энэ талбар нь шаардлагатай үед :values байхгүй байна.',
    'required_without_all' => 'Энэ талбар нь Ч шаардлагатай үед :values байгаа.',
    'same' => 'Энэ салбарын үнэ цэнэ нь нэг нь тохирох естой :other.',
    'size' => [
        'array' => 'The content must contain :size items.',
        'file' => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string' => 'The string must be :size characters.',
    ],
    'starts_with' => 'Энэ нь дараах нэг эхлэх естой: :values.',
    'string' => 'Энэ нь мөр байх естой.',
    'timezone' => 'Энэ нь хүчин төгөлдөр бүс байх естой.',
    'unique' => 'Энэ нь аль хэдийн авч байна.',
    'uploaded' => 'Энэ нь хуулж чадаагүй.',
    'url' => 'Энэ хэлбэр нь хүчин төгөлдөр бус байна.',
    'uuid' => 'Энэ нь хүчин төгөлдөр хамгаалалт байх естой.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes' => [],
];
