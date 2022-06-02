<?php

namespace Sawirricardo\Whatsapp\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\Whatsapp\Whatsapp
 */
class Whatsapp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-whatsapp';
    }
}
