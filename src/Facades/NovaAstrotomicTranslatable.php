<?php

namespace Blastedcode\NovaAstrotomicTranslatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Blastedcode\NovaAstrotomicTranslatable\NovaAstrotomicTranslatable
 */
class NovaAstrotomicTranslatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Blastedcode\NovaAstrotomicTranslatable\NovaAstrotomicTranslatable::class;
    }
}
