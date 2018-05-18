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

    'accepted' => ':attribute deve ser aceito.',
    'active_url' => ':attribute não é um URL válido.',
    'after' => ':attribute deve ser uma data depois da :date.',
    'after_or_equal' => ':attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => ':attribute só pode conter letras.',
    'alpha_dash' => ':attribute só pode conter letras, números e traços.',
    'alpha_num' => ':attribute só pode conter letras e números.',
    'array' => ':attribute deve ser uma matriz.',
    'before' => ':attribute deve ser uma data anterior :date.',
    'before_or_equal' => ':attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => ':attribute deve ser entre :min e :max.',
        'file' => ':attribute deve ser entre :min e :max kilobytes.',
        'string' => ':attribute deve ser entre :min e :max caracteres.',
        'array' => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => ':attribute deve ser verdadeiro ou falso.',
    'confirmed' => ':attribute de confirmação não confere.',
    'date' => ':attribute não é uma data válida.',
    'date_format' => ':attribute não corresponde ao formato :format.',
    'different' => 'Os campos :attribute e :other devem ser diferentes.',
    'digits' => ':attribute deve ter :digits dígitos.',
    'digits_between' => ':attribute deve ter entre :min e :max dígitos.',
    'dimensions' => ':attribute tem dimensões de imagem inválidas.',
    'distinct' => ':attribute campo tem um valor duplicado.',
    'email' => ':attribute deve ser um endereço de e-mail válido.',
    'exists' => ':attribute selecionado é inválido.',
    'file' => ':attribute deve ser um arquivo.',
    'filled' => ':attribute O deve ter um valor.',
    'image' => ':attribute deve ser uma imagem.',
    'in' => ':attribute selecionado é inválido.',
    'in_array' => ':attribute não existe em :other.',
    'integer' => ':attribute deve ser um número inteiro.',
    'ip' => ':attribute deve ser um endereço de IP válido.',
    'ipv4' => ':attribute deve ser um endereço IPv4 válido.',
    'ipv6' => ':attribute deve ser um endereço IPv6 válido.',
    'json' => ':attribute deve ser uma string JSON válida.',
    'max' => [
        'numeric' => ':attribute não pode ser superior a :max.',
        'file' => ':attribute não pode ser superior a :max kilobytes.',
        'string' => ':attribute não pode ser superior a :max caracteres.',
        'array' => ':attribute não pode ter mais do que :max itens.',
    ],
    'mimes' => ':attribute deve ser um arquivo de tipo: :values.',
    'mimetypes' => ':attribute deve ser um arquivo de tipo: :values.',
    'min' => [
        'numeric' => ':attribute deve ser superior a :min.',
        'file' => ':attribute deve ser inferior a :min kilobytes.',
        'string' => ':attribute deve ser inferior a :min caracteres.',
        'array' => ':attribute deve ter menos do que :min itens.',
    ],
    'not_in' => ':attribute selecionado é inválido.',
    'numeric' => ':attribute deve ser um número.',
    'present' => ':attribute deve estar presente.',
    'regex' => ':attribute tem um formato inválido.',
    'required' => ':attribute é obrigatório.',
    'required_if' => ':attribute é obrigatório quando :other é :value.',
    'required_unless' => ':attribute é obrigatório exceto quando :other seja :values.',
    'required_with' => ':attribute é obrigatório quando :values está presente.',
    'required_with_all' => ':attribute é obrigatório quando :values está presente.',
    'required_without' => ':attribute é obrigatório quando :values não está presente.',
    'required_without_all' => ':attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same' => 'Os campos :attribute e :other devem corresponder.',
    'size' => [
        'numeric' => ':attribute deve ser :size.',
        'file' => ':attribute deve ser :size kilobytes.',
        'string' => ':attribute deve ser :size caracteres.',
        'array' => ':attribute deve conter :size itens.',
    ],
    'string' => ':attribute deve ser uma string.',
    'timezone' => ':attribute deve ser uma zona válida.',
    'unique' => ':attribute já está sendo utilizado.',
    'uploaded' => ':attribute falha no upload.',
    'url' => ':attribute tem um formato inválido.',

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
        'password' => [
            'min' => 'Formato de senha inválido. Tente novamente.',
        ],
        'old_password' => [
            'min' => 'Formato de senha inválido. Tente novamente.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'Nome',
        'socialname' => 'Razão Social',
        'fantasyname' => 'Fantasia',
        'phone' => 'Telefone',
        'phone2' => 'Telefone 2',
        'email' => 'E-mail',
        'zipcode' => 'CEP',
        'neighborhood' => 'Bairro',
        'publicplace' => 'Logradouro',
        'complement' => 'Complemento',
        'city' => 'Cidade',
        'state' => 'Estado',
        'description' => 'Descrição',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmação de Senha',
        'cpf' => 'CPF',
        'date_start' => 'Data Inicial',
        'time_start' => 'Hora Inicial',
        'date_end' => 'Data Final',
        'time_end' => 'Hora Final',
        'quantity_stock' => 'Quantidade em estoque',
        'quantity_by_day' => 'Quantidade por dia',
        'quantity_by_cpf' => 'Quantidade por CPF',
        'original_price' => 'Valor do produto',
        'percentage_off' => 'Porcentagem de desconto',
        'commission_percentage' => 'Porcentagem da comissão',
        'position' => 'Posição',
        'days' => 'Dias de uso',
        'days_use' => 'Dias para resgate',
        'rules' => 'Regras',
        'old_password' => 'Senha atual',
        'new_password' => 'Senha nova',
        'points' => 'Pontos',
        'birth' => 'Data de nascimento',
        'type' => 'Tipo',
        'origin' => 'Origem',
        'gift_id' => 'Presente',
        'discount_id' => 'Desconto',
        'product_id' => 'Produto',
        'user_id' => 'Usuário',
        'code' => 'Código',
        'photo' => 'Foto',
        'image' => 'Imagem',
        'contact_name' => 'Nome responsável',
        'contact_cpf' => 'CPF responsável',
        'contact_phone' => 'Celular responsável',
        'contact_email' => 'Email responsável',
        'monday_hour_start' => 'Horário de começo(segunda)',
        'monday_hour_end' => 'Horário de fim(segunda)',
        'tuesday_hour_start' => 'Horário de começo(terça)',
        'tuesday_hour_end' => 'Horário de fim(terça)',
        'wednesday_hour_start' => 'Horário de começo(quarta)',
        'wednesday_hour_end' => 'Horário de fim(quarta)',
        'thursday_hour_start' => 'Horário de começo(quinta)',
        'thursday_hour_end' => 'Horário de fim(quinta)',
        'friday_hour_start' => 'Horário de começo(sexta)',
        'friday_hour_end' => 'Horário de fim(sexta)',
        'saturday_hour_start' => 'Horário de começo(sábado)',
        'saturday_hour_end' => 'Horário de fim(sábado)',
        'sunday_hour_start' => 'Horário de começo(domingo)',
        'sunday_hour_end' => 'Horário de fim(domingo)',
        'note' => 'Nota',
        'tag' => 'Tag',
        'comment' => 'Comentário',
        'tag.*' => 'Tag',
    ],

];
