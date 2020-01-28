<?php

namespace Phpsa\LaravelFilemakerApi;

use INTERMediator\FileMakerServer\RESTAPI\FMDataAPI;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    protected $defer = true;

    const CONFIG_PATH = __DIR__ . '/../config/laravel-filemaker-api.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('laravel-filemaker-api.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'laravel-filemaker-api'
        );

        $this->app->singleton('laravel-filemaker-api', static function ($app) {
            $config = $app['config']['laravel-filemaker-api'];
            return new FMDataAPI(
                $config['database'],
                $config['user'],
                $config['password'],
                $config['host'],
                $config['port'],
                $config['protocol'],
                $config['fmDataSource'],
                $config['isUnitTest']
            );


        });

    }
}
