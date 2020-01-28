<?php

namespace Phpsa\LaravelFilemakerApi\Tests;

use Phpsa\LaravelFilemakerApi\Facades\LaravelFilemakerApi;
use Phpsa\LaravelFilemakerApi\ServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelFilemakerApiTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-filemaker-api' => LaravelFilemakerApi::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
