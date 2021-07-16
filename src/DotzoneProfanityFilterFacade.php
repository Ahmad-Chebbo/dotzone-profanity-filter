<?php

namespace AhmadChebbo\DotzoneProfanityFilter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AhmadChebbo\DotzoneProfanityFilter\DotzoneProfanityFilter
 */
class DotzoneProfanityFilterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dotzone-profanity-filter';
    }
}
