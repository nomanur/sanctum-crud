# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nomanur/sanctum-crud.svg?style=flat-square)](https://packagist.org/packages/nomanur/sanctum-crud)
[![Total Downloads](https://img.shields.io/packagist/dt/nomanur/sanctum-crud.svg?style=flat-square)](https://packagist.org/packages/nomanur/sanctum-crud)
![GitHub Actions](https://github.com/nomanur/sanctum-crud/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require nomanur/sanctum-crud
```

## Usage

Add this in User Model
```php
// Usage description here
    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
```
After That
```php
    php artisan vendor:publish
```
Publish Laravel\Sanctum\SanctumServiceProvider and sanctum-crud-config;

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email nomanurrahman@gmail.com instead of using the issue tracker.

## Credits

-   [nomanur](https://github.com/nomanur)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
