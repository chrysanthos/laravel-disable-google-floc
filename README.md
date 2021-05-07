# Automatically disable Google's FLoC in Laravel apps

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