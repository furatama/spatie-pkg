<?php

namespace Furatama\SpatiePkg\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Furatama\SpatiePkg\SpatiePkg
 */
class SpatiePkg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'spatie-pkg';
    }
}
