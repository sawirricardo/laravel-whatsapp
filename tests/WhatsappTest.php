<?php

use Sawirricardo\Whatsapp\Webhook;
use Sawirricardo\Whatsapp\Whatsapp as WhatsappClient;

it('can get the client', function () {
    expect(whatsappClient())->toBeInstanceOf(WhatsappClient::class);
});

it('can get the webhook instance', function () {
    expect(whatsappWebhook())->toBeInstanceOf(Webhook::class);
});
