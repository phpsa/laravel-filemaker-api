<?php

namespace Phpsa\LaravelFilemakerApi\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelFilemakerApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-filemaker-api';
    }
}
