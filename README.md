# Sum

Simple PHP package for add two numbers

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

$sum = new Sum;
echo $sum->calculate(1, 1); // 2
```

## Testing

You can run tests with command

```bash
vendor/bin/phpunit tests/
```
