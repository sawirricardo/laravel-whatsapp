<?php

namespace Sawirricardo\Whatsapp\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Sawirricardo\Whatsapp\Whatsapp create ($client = null)
 * @method static \Sawirricardo\Whatsapp\Webhook webhook ()
 * @see \Sawirricardo\Whatsapp\Whatsapp
 */
class Whatsapp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-whatsapp';
    }
}
