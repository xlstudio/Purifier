<?php

namespace Xlstudio\Tests\Purifier;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Xlstudio\Purifier\Purifier;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testPurifierIsInjectable()
    {
        $this->assertIsInjectable(Purifier::class);
    }
}