<?php

namespace LPMatrix\LaravelRtc;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LPMatrix\LaravelRtc\Skeleton\SkeletonClass
 */
class LaravelRtcFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-rtc';
    }
}
