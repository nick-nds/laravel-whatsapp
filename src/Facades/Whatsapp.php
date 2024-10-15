<?php

namespace Bistrokeep\Whatsapp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bistrokeep\Whatsapp\Whatsapp
 */
class Whatsapp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bistrokeep\Whatsapp\Whatsapp::class;
    }
}
