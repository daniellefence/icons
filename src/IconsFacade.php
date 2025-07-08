<?php

namespace Daniellefence\Icons;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Daniellefence\Icons\Skeleton\SkeletonClass
 */
class IconsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'icons';
    }
}
