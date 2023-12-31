# A Laravel starter kit with sanctum

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nomanur/sanctum-crud.svg?style=flat-square)](https://packagist.org/packages/nomanur/sanctum-crud)
[![Total Downloads](https://img.shields.io/packagist/dt/nomanur/sanctum-crud.svg?style=flat-square)](https://packagist.org/packages/nomanur/sanctum-crud)
![GitHub Actions](https://github.com/nomanur/sanctum-crud/actions/workflows/main.yml/badge.svg)

## Installation

You can install the package via composer:

```bash
composer require nomanur/sanctum-crud
```

## Usage

Add this in User Model
```php
    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
```

After That
```php
    php artisan migrate
```
run that to generate migration and which will also seed role in roles table.

```php
    php artisan sanctumcrud:route
```
all the routes will be added in your routes\api.php and check php artisan route:list to see all the routes.


After That
```php
    php artisan vendor:publish
```
Publish Nomanur\SanctumCrud\SanctumCrudServiceProvider

And
```php
    php artisan migrate
```

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

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
