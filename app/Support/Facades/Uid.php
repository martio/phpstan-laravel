<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

final class Uid extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'uid';
    }
}
