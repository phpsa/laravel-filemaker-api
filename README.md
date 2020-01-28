# Laravel Filemaker Api

[![For Laravel 6][badge_laravel]](https://github.com/phpsa/laravel-filemaker-api/issue)
[![Build Status](https://travis-ci.org/phpsa/laravel-filemaker-api.svg?branch=master)](https://travis-ci.org/phpsa/laravel-filemaker-api)
[![Coverage Status](https://coveralls.io/repos/github/phpsa/laravel-filemaker-api/badge.svg?branch=master)](https://coveralls.io/github/phpsa/laravel-filemaker-api?branch=master)
[![Packagist](https://img.shields.io/packagist/v/phpsa/laravel-filemaker-api.svg)](https://packagist.org/packages/phpsa/laravel-filemaker-api)
[![Packagist](https://poser.pugx.org/phpsa/laravel-filemaker-api/d/total.svg)](https://packagist.org/packages/phpsa/laravel-filemaker-api)
[![Packagist](https://img.shields.io/packagist/l/phpsa/laravel-filemaker-api.svg)](https://packagist.org/packages/phpsa/laravel-filemaker-api)
[![Github Issues][badge_issues]](https://github.com/phpsa/laravel-filemaker-api/issue)

FMDataAPI is a class developed by PHP to access FileMaker database with FileMaker Data API.

## Installation

Install via composer
```bash
composer require phpsa/laravel-filemaker-api
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Phpsa\LaravelFilemakerApi\ServiceProvider" --tag="config"
```

## Usage

```php
use Phpsa\LaravelFilemakerApi\Facades\LaravelFilemakerApi;


LaravelFilemakerApi::layout_name->query();
LaravelFilemakerApi::layout('layout_name')->query()
```

- for more see [FMDataAPI](https://github.com/msyk/FMDataAPI)
- [API Document](http://inter-mediator.info/FMDataAPI/namespaces/INTERMediator.FileMakerServer.RESTAPI.html)

## Security

If you discover any security related issues, please email
instead of using the issue tracker.

## Credits

- [Masayuki Nii](https://github.com/msyk/FMDataAPI) - Original Filemaker Code
- [Craig Smith](https://github.com/phpsa/laravel-filemaker-api) - Laravel Intergration
- [All contributors](https://github.com/phpsa/laravel-filemaker-api/graphs/contributors)
