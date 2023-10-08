<?php

namespace Nomanur\SanctumCrud;

use Nomanur\SanctumCrud\SanctumCrud;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Nomanur\SanctumCrud\Skeleton\SkeletonClass
 */
class SanctumCrudFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SanctumCrud::class;
    }
}
