<?php

if (! function_exists('tetherd')) {
    /**
     * Get tetherd client instance.
     *
     * @return \Weisskpub\Tether\Client
     */
    function tetherd()
    {
        return app('tetherd');
    }
}
