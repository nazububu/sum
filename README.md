# Sum

Simple PHP package for add two numbers

[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![License][badge_license]][link_license]

## Installation

To get the latest version of `Sum`, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require nazububu/sum
```

Or manually update `require` block of `composer.json` and run `composer update`.

```json
{
  "require": {
    "nazububu/sum": "^1.0"
  }
}
```

## Using

```php
use Nazububu\Sum\Sum;

print(Sum::handle(1, 1)); // 2
```

## Testing

You can run tests with command

```bash
vendor/bin/phpunit tests/
```

[badge_downloads]:      https://img.shields.io/packagist/dt/nazububu/sum.svg?style=flat-square

[badge_license]:        https://img.shields.io/packagist/l/nazububu/sum.svg?style=flat-square

[badge_stable]:         https://img.shields.io/github/v/release/nazububu/sum?label=stable&style=flat-square

[badge_unstable]:       https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_license]:         LICENSE

[link_packagist]:       https://packagist.org/packages/nazububu/sum
