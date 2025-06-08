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

    /* Default ada :attribute
        // 'accepted' => ':attribute harus diterima.',
     */

    'accepted' => 'harus diterima.',
    'accepted_if' => 'harus diterima ketika :other adalah :value.',
    'active_url' => 'harus berupa URL yang valid.',
    'after' => 'harus berupa tanggal setelah :date.',
    'after_or_equal' => 'harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'hanya boleh berisi huruf.',
    'alpha_dash' => 'hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'hanya boleh berisi huruf dan angka.',
    'array' => 'harus berupa array.',
    'ascii' => 'hanya boleh berisi karakter alfanumerik dan simbol satu byte.',
    'before' => 'harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'harus memiliki antara :min dan :max item.',
        'file' => 'harus antara :min dan :max kilobita.',
        'numeric' => 'harus antara :min dan :max.',
        'string' => 'harus antara :min dan :max karakter.',
    ],
    'boolean' => 'harus benar atau salah.',
    'can' => 'mengandung nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi the tidak cocok.',
    'contains' => 'tidak memiliki nilai yang diperlukan.',
    'current_password' => 'password salah.',
    'date' => 'harus berupa tanggal yang valid.',
    'date_equals' => 'harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'harus sesuai dengan format :format.',
    'decimal' => 'harus memiliki :decimal tempat desimal.',
    'declined' => 'harus ditolak.',
    'declined_if' => 'harus ditolak ketika :other adalah :value.',
    'different' => 'dan :other harus berbeda.',
    'digits' => 'harus :digits digit.',
    'digits_between' => 'harus antara :min dan :max digit.',
    'dimensions' => 'memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'memiliki nilai yang duplikat.',
    'doesnt_end_with' => 'tidak boleh diakhiri dengan salah satu dari berikut: :values.',
    'doesnt_start_with' => 'tidak boleh dimulai dengan salah satu dari berikut: :values.',
    'email' => 'harus berupa alamat email yang valid.',
    'ends_with' => 'harus diakhiri dengan salah satu dari berikut: :values.',
    'enum' => 'selected tidak valid.',
    'exists' => 'selected tidak valid.',
    'extensions' => 'harus memiliki salah satu ekstensi berikut: :values.',
    'file' => 'harus berupa file.',
    'filled' => 'harus memiliki nilai.',
    'gt' => [
        'array' => 'harus memiliki lebih dari :value item.',
        'file' => 'harus lebih besar dari :value kilobita.',
        'numeric' => 'harus lebih besar dari :value.',
        'string' => 'harus lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => 'harus memiliki :value item atau lebih.',
        'file' => 'harus lebih besar dari atau sama dengan :value kilobita.',
        'numeric' => 'harus lebih besar dari atau sama dengan :value.',
        'string' => 'harus lebih besar dari atau sama dengan :value karakter.',
    ],
    'hex_color' => 'harus berupa warna heksadesimal yang valid.',
    'image' => 'harus berupa gambar.',
    'in' => 'selected tidak valid.',
    'in_array' => 'harus ada dalam :other.',
    'integer' => 'harus berupa bilangan bulat.',
    'ip' => 'harus berupa alamat IP yang valid.',
    'ipv4' => 'harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'harus berupa alamat IPv6 yang valid.',
    'json' => 'harus berupa string JSON yang valid.',
    'list' => 'harus berupa daftar.',
    'lowercase' => 'harus berupa huruf kecil.',
    'lt' => [
        'array' => 'harus memiliki kurang dari :value item.',
        'file' => 'harus kurang dari :value kilobita.',
        'numeric' => 'harus kurang dari :value.',
        'string' => 'harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'tidak boleh memiliki lebih dari :value item.',
        'file' => 'harus kurang dari atau sama dengan :value kilobita.',
        'numeric' => 'harus kurang dari atau sama dengan :value.',
        'string' => 'harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'tidak boleh memiliki lebih dari :max item.',
        'file' => 'tidak boleh lebih besar dari :max kilobita.',
        'numeric' => 'tidak boleh lebih besar dari :max.',
        'string' => 'tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => 'tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'harus berupa file dengan tipe: :values.',
    'mimetypes' => 'harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => 'harus memiliki setidaknya :min item.',
        'file' => 'harus setidaknya :min kilobita.',
        'numeric' => 'harus setidaknya :min.',
        'string' => 'harus setidaknya :min karakter.',
    ],
    'min_digits' => 'harus memiliki setidaknya :min digit.',
    'missing' => 'harus tidak ada.',
    'missing_if' => 'harus tidak ada ketika :other adalah :value.',
    'missing_unless' => 'harus tidak ada kecuali :other adalah :value.',
    'missing_with' => 'harus tidak ada ketika :values ada.',
    'missing_with_all' => 'harus tidak ada ketika :values ada.',
    'multiple_of' => 'harus merupakan kelipatan dari :value.',
    'not_in' => 'selected tidak valid.',
    'not_regex' => 'Format the tidak valid.',
    'numeric' => 'harus berupa angka.',
    'password' => [
        'letters' => 'harus mengandung setidaknya satu huruf.',
        'mixed' => 'harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'harus mengandung setidaknya satu angka.',
        'symbols' => 'harus mengandung setidaknya satu simbol.',
        'uncompromised' => 'telah muncul dalam kebocoran data. Silakan pilih yang berbeda.',
    ],
    'present' => 'harus ada.',
    'present_if' => 'harus ada ketika :other adalah :value.',
    'present_unless' => 'harus ada kecuali :other adalah :value.',
    'present_with' => 'harus ada ketika :values ada.',
    'present_with_all' => 'harus ada ketika :values ada.',
    'prohibited' => 'dilarang.',
    'prohibited_if' => 'dilarang ketika :other adalah :value.',
    'prohibited_if_accepted' => 'dilarang ketika :other diterima.',
    'prohibited_if_declined' => 'dilarang ketika :other ditolak.',
    'prohibited_unless' => 'dilarang kecuali :other ada dalam :values.',
    'prohibits' => 'melarang :other untuk ada.',
    'regex' => 'Format the tidak valid.',
    'required' => 'wajib diisi.',
    'required_array_keys' => 'harus berisi entri untuk: :values.',
    'required_if' => 'wajib diisi ketika :other adalah :value.',
    'required_if_accepted' => 'wajib diisi ketika :other diterima.',
    'required_if_declined' => 'wajib diisi ketika :other ditolak.',
    'required_unless' => 'wajib diisi kecuali :other ada dalam :values.',
    'required_with' => 'wajib diisi ketika :values ada.',
    'required_with_all' => 'wajib diisi ketika :values ada.',
    'required_without' => 'wajib diisi ketika :values tidak ada.',
    'required_without_all' => 'wajib diisi ketika tidak ada :values.',
    'same' => 'harus sesuai dengan :other.',
    'size' => [
        'array' => 'harus berisi :size item.',
        'file' => 'harus :size kilobita.',
        'numeric' => 'harus :size.',
        'string' => 'harus :size karakter.',
    ],
    'starts_with' => 'harus dimulai dengan salah satu dari berikut: :values.',
    'string' => 'harus berupa string.',
    'timezone' => 'harus berupa zona waktu yang valid.',
    'unique' => 'sudah digunakan.',
    'uploaded' => 'gagal diunggah.',
    'uppercase' => 'harus berupa huruf besar.',
    'url' => 'harus berupa URL yang valid.',
    'ulid' => 'harus berupa ULID yang valid.',
    'uuid' => 'harus berupa UUID yang valid.',

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
