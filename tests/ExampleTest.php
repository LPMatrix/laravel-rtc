<?php

namespace LPMatrix\LaravelRtc\Tests;

use Orchestra\Testbench\TestCase;
use LPMatrix\LaravelRtc\LaravelRtcServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelRtcServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
