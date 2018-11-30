<?php

namespace DuckUfo\Wallet;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DuckUfo\Wallet\Wallet
 */
class WalletFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wallet';
    }
}
