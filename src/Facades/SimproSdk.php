<?php

namespace StevenGrant\SimproSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \StevenGrant\SimproSdk\SimproSdk
 */
class SimproSdk extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \StevenGrant\SimproSdk\SimproSdk::class;
    }
}
