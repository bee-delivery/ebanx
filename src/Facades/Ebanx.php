<?php

namespace BeeDelivery\Ebanx\Facades;

use Illuminate\Support\Facades\Facade;

class Ebanx extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ebanx';
    }
}
