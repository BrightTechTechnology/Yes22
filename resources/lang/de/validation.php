<?php

<?php

return [

    "accepted"             => ":attribute wurde nicht akzeptiert.",
    "active_url"           => ":attribute ist keine gültige Adresse.",
    "after"                => ":attribute muss ein Datum nach dem :date sein.",
    "alpha"                => ":attribute darf lediglich Buchstaben enthalten.",
    "alpha_dash"           => ":attribute darf lediglich Buchstaben, Zahlen und Bindestriche enthalten.",
    "alpha_num"            => ":attribute darf lediglich Buchstaben und Zahlen enthalten.",
    "array"                => ":attribute muss ein Array sein.",
    "before"               => ":attribute muss ein Datum vor dem :date sein.",
    "between"              => [
        "numeric" => ":attribute muss zwischen :min und :max liegen.",
        "file"    => ":attribute muss zwischen :min und :max kb gross sein.",
        "string"  => ":attribute muss zwischen :min und :max Zeichen lang sein.",
        "array"   => ":attribute muss zwischen :min und :max Elemente beinhalten.",
    ],
    "boolean"              => "Das :attribute Feld muss wahr oder falsch sein.",
    "confirmed"            => "Das :attribute Feld stimmt nicht überein.",
    "date"                 => "Das :attribute Feld ist kein gültiges Datum.",
    "date_format"          => "Das :attribute Feld ist nicht in folgendem Format: :format.",
    "different"            => "Die Felder :attribute und :other duerfen nicht übereinstimmen.",
    "digits"               => "Das :attribute Feld muss :digits Ziffern lang sein.",
    "digits_between"       => "Das :attribute Feld muss zwischen :min und :max Ziffern lang sein.",
    "email"                => "Das :attribute Feld muss eine gültige E-Mail Adresse sein.",
    "filled"               => "Das :attribute Feld muss ausgefüllt werden.",
    "exists"               => "Das gewählte :attribute ist nicht gültig.",
    "image"                => ":attribute muss ein Bild sein.",
    "in"                   => "Das gewählte Feld :attribute ist nicht gültig.",
    "integer"              => "Das Feld :attribute muss eine Zahl (Integer) sein.",
    "ip"                   => "Das :attribute Feld muss eine gültige Zahl sein.",
    "max"                  => [
        "numeric" => ":attribute darf nicht grösser als :max sein.",
        "file"    => ":attribute darf nicht grösser als :max kb sein.",
        "string"  => ":attribute darf nicht länger als :max Zeichen lang sein.",
        "array"   => ":attribute darf nicht mehr als :max Elemente enthalten.",
    ],
    "mimes"                => ":attribute muss eine Datei des Typen :values sein.",
    "min"                  => [
        "numeric" => ":attribute darf nicht kleiner als :min sein.",
        "file"    => ":attribute muss mindestens :min kb gross sein.",
        "string"  => ":attribute muss mindestens :min Zeichen lang sein.",
        "array"   => ":attribute muss mindestens :min Elemente enthalten.",
    ],
    "not_in"               => ":attribute ist ungültig.",
    "numeric"              => ":attribute muss eine Nummer sein.",
    "regex"                => ":attribute Format ist ungültig.",
    "required"             => "Das :attribute Feld muss angegeben werden.",
    "required_if"          => "Das :attribute Feld muss angegeben werden, wenn :other ist :value.",
    "required_with"        => "Das :attribute Feld muss angegeben werden, wenn :values angegeben wurde.",
    "required_with_all"    => "Das :attribute Feld muss angegeben werden, wenn :values angegeben wurde.",
    "required_without"     => "Das :attribute Feld muss angegeben werden, wenn :values nicht angegeben wurde.",
    "required_without_all" => "Das :attribute Feld muss angegeben werden, wenn keine der :values angegeben wurden.",
    "same"                 => ":attribute und :other muss übereinstimmen.",
    "size"                 => [
        "numeric" => ":attribute muss die Grösse von :size haben.",
        "file"    => ":attribute muss :size kb gross sein.",
        "string"  => ":attribute muss :size Zeichen lang sein.",
        "array"   => ":attribute muss :size Elemente enthalten.",
    ],
    "unique"               => ":attribute wird bereits genutzt.",
    "url"                  => ":attribute Format ist ungültig.",
    "timezone"             => ":attribute muss eine gültige Zeitzone sein.",

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
