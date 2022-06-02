<?php

use Sawirricardo\Whatsapp\Laravel\Facades\Whatsapp;

if (! function_exists('whatsappClient')) {
    /** @return \Sawirricardo\Whatsapp\Whatsapp */
    function whatsappClient()
    {
        return app(Whatsapp::class)::create();
    }
}

if (! function_exists('whatsappWebhook')) {
    /** @return \Sawirricardo\Whatsapp\Webhook */
    function whatsappWebhook()
    {
        return app(Whatsapp::class)::webhook();
    }
}
