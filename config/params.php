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
];
