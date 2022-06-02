<?php

// config for Sawirricardo/Whatsapp
return [
    'token' => env('WHATSAPP_TOKEN'),

    'phone_id' => env('WHATSAPP_PHONE_ID'),

    'webhook_verify_token' => env('WHATSAPP_WEBHOOK_VERIFY_TOKEN', 'default'),
];
