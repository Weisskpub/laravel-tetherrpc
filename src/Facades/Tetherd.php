<?php

namespace Weisskpub\Tether\Facades;

use Illuminate\Support\Facades\Facade;

class Tetherd extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tetherd';
    }
}
