<?php

namespace violator667\backpackpl\Facades;

use Illuminate\Support\Facades\Facade;

class backpackpl extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'backpackpl';
    }
}
