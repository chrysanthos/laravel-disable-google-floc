# Automatically disable Google's FLoC in Laravel apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrysanthos/laravel-disable-google-floc.svg?style=flat-square)](https://packagist.org/packages/chrysanthos/laravel-disable-google-floc)
[![run-tests](https://github.com/chrysanthos/laravel-disable-google-floc/actions/workflows/tests.yml/badge.svg)](https://github.com/chrysanthos/laravel-disable-google-floc/actions/workflows/tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/chrysanthos/laravel-disable-google-floc.svg?style=flat-square)](https://packagist.org/packages/chrysanthos/laravel-disable-google-floc)


This package automatically disables [Google's FLoC](https://plausible.io/blog/google-floc) for your laravel app.


## Installation

You can install the package via composer:

```bash
composer require chrysanthos/laravel-disable-google-floc
```

## Usage

This package will automatically register a middleware in the web group which adds the `Permissions-Policy` header to disable FLoC. 

Note that you can still override this by manually adding the header where needed. 

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
