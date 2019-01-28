<?php

namespace Weisskpub\Tether\Exceptions;

use RuntimeException;

class TetherdException extends RuntimeException
{
    /**
     * Construct new tetherd exception.
     *
     * @param object $error
     *
     * @return void
     */
    public function __construct($error)
    {
        parent::__construct($error['message'], $error['code']);
    }
}
