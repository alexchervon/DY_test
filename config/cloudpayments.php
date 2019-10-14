<?php

return [
    'apiSecret' => env('CLOUDPAYMENTS_SECRET'),
    'publicId' => 'pk_e55567ef8b7e2f3902b6177b269eb',
    'apiUrl' => 'https://api.cloudpayments.ru',
    'cultureName' => 'ru-RU', // For more languages: https://cloudpayments.ru/Docs/Api#language
    'defaultCurrency' => 'RUB',
    'callbackHost' => env('APP_URL')
];