# Enhance your laravel apps with WhatsApp's Cloud API

![Laravel WhatsApp](https://banners.beyondco.de/laravel-whatsapp.png?theme=light&packageManager=composer+require&packageName=sawirricardo%2Flaravel-whatsapp&pattern=architect&style=style_1&description=Enhance+your+laravel+apps+with+WhatsApp&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-whatsapp.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-whatsapp)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-whatsapp/run-tests?label=tests)](https://github.com/sawirricardo/laravel-whatsapp/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-whatsapp/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sawirricardo/laravel-whatsapp/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-whatsapp.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-whatsapp)

Use Whatsapp API in your Laravel app!

## Support us

Investing on this package is defintely a good move from you. You can support by donating to:

-   PayPal https://www.paypal.com/paypalme/sawirricardo.
-   BCA 8330123584

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-whatsapp
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="whatsapp-config"
```

This is the contents of the published config file:

```php
return [
    'token' => env('WHATSAPP_TOKEN'),

    'phone_id' => env('WHATSAPP_PHONE_ID'),

    'webhook_verify_token' => env('WHATSAPP_WEBHOOK_VERIFY_TOKEN', 'default'),
];
```

## Usage

```php
\Sawirricardo\Whatsapp\Laravel\Facades\Whatsapp::create()
    ->to('+10252423232')
    ->message(new TextMessageData('Hello world!'))
    ->send();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
