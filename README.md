# Laravel Icons Component

[![Latest Version on Packagist](https://img.shields.io/packagist/v/daniellefence/icons.svg?style=flat-square)](https://packagist.org/packages/daniellefence/icons)
[![Total Downloads](https://img.shields.io/packagist/dt/daniellefence/icons.svg?style=flat-square)](https://packagist.org/packages/daniellefence/icons)
![Tests](https://github.com/daniellefence/icons/actions/workflows/main.yml/badge.svg)

A Blade component package for rendering inline SVG icons in Laravel applications. Designed for flexibility and seamless integration with Tailwind CSS or other utility frameworks. Each icon is exposed as a Blade component and automatically accepts custom attributes (e.g., classes, roles, titles).

## Installation

You can install the package via Composer:

```bash
composer require daniellefence/icons
```

Publish the icons if needed:

```bash
php artisan vendor:publish --tag=icons
```

## Usage

Call any icon by passing its name as the `icon` prop to the `x-df::icon` Blade component:

```blade
<x-df::icon :icon="'chevron-down'" class="w-4 h-4 text-gray-600" />
```

All SVGs automatically inherit attributes:

## Testing

Run the test suite using:

```bash
composer test
```

## Contributing

Please read the [CONTRIBUTING](CONTRIBUTING.md) guide for details.

## Security

If you discover a security vulnerability, please email sbarron@daniellefence.net instead of using the issue tracker.

## Credits

Developed and maintained by the IT/Marketing department at Danielle Fence and Outdoor Living.

- [Shane Barron](https://github.com/daniellefence)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). See [License File](LICENSE.md) for details.
