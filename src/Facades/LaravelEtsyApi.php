<?php

namespace automica\LaravelEtsyApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \automica\LaravelEtsyApi\LaravelEtsyApi
 */
class LaravelEtsyApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \automica\LaravelEtsyApi\LaravelEtsyApi::class;
    }
}
