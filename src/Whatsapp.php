<?php

namespace Sawirricardo\Whatsapp\Laravel;

use Sawirricardo\Whatsapp\Webhook;
use Sawirricardo\Whatsapp\Whatsapp as WhatsappClient;

class Whatsapp
{
    /** @var array */
    private $config;

    public function __construct($repository)
    {
        $this->config = $repository;
    }

    public function create($client = null)
    {
        return (new WhatsappClient($client))
            ->token($this->config['token'])
            ->phoneId($this->config['phone_id']);
    }

    public function webhook()
    {
        return new Webhook(
            $this->config['token'],
            $this->config['webhook_verify_token']
        );
    }
}
