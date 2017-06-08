<?php

namespace Xlstudio\Purifier\Facades;

use Illuminate\Support\Facades\Facade;

/**
* @see \Xlstudio\Purifier
*/
class Purifier extends Facade
{
    
    protected static function getFacadeAccessor()
    {
        return 'purifier';
    }
}