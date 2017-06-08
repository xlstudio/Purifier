<?php

namespace Xlstudio\Tests\Purifier\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Xlstudio\Purifier\Facades\Purifier;
use Xlstudio\Tests\Purifier\AbstractTestCase;

class PurifierTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'purifier';
    }
    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Purifier::class;
    }
    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return \Xlstudio\Purifier\Purifier::class;
    }
}