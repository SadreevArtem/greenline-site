<?php

return [
    'adminEmails' => [
        'info@greenlinerussia.com',
        'a.sadreew@gmail.com'
    ],
    'senderEmail' => 'greenlinerussiacom@gmail.com',
    'senderName' => 'Greenline NOTIFY',
    'smtp' => [
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'encryption' => 'ssl',
        'username' => 'greenlinerussiacom@gmail.com',
        'password' => getenv('GREENLINE_SMTP_PASSWORD') ?: 'vuoiqltobzdhdjsw',
    ],
    'legal' => [
        'operatorName' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «ГРИНЛАЙН»',
        'operatorNameEn' => 'LIMITED LIABILITY COMPANY “GREENLINE” (ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «ГРИНЛАЙН»)',
        'inn' => '3907208334',
        'registrationNumber' => '1103925001047',
        'address' => 'г. Калининград, ул. Пугачева, д. 16, офис 209',
        'addressEn' => 'Office 209, 16 Pugacheva Street, Kaliningrad, Russia',
        'privacyEmail' => 'info@greenlinerussia.com',
        'consentVersion' => '2026-07-13',
        'privacyPolicyVersion' => '2026-07-13',
        'effectiveDate' => '13 июля 2026 года',
        'effectiveDateEn' => 'July 13, 2026',
    ],
];
