<?php

namespace Sawirricardo\Whatsapp\Laravel\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\Whatsapp\Laravel\WhatsappServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            WhatsappServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('whatsapp.token', 'token');
        config()->set('whatsapp.phone_id', 'phone_id');
        config()->set('whatsapp.webhook_verify_token', 'webhook_verify_token');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-whatsapp_table.php.stub';
        $migration->up();
        */
    }
}
