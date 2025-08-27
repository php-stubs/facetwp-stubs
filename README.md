# FacetWP Stubs

[![Packagist stats](https://img.shields.io/packagist/dt/php-stubs/facetwp-stubs.svg)](https://packagist.org/packages/php-stubs/facetwp-stubs/stats)
[![Packagist](https://img.shields.io/packagist/v/php-stubs/facetwp-stubs.svg?color=4CC61E&style=popout)](https://packagist.org/packages/php-stubs/facetwp-stubs)

It provides stub declarations for [FacetWP](https://facetwp.com/)
core functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools
like [PHPStan](https://github.com/phpstan/phpstan).

The stubs are generated from source code manually placed in `source/facetwp` 
using [php-stubs/generator](https://github.com/php-stubs/generator).

FacetWP's changelog can be found here [https://facetwp.com/help-center/changelog/](https://facetwp.com/help-center/changelog/).

## Requirements

- PHP ^8.0

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/facetwp-stubs
```

Alternatively you may download `facetwp-stubs.php` directly.

## Versioning

This package is versioned to match the FacetWP version from which the stubs are generated.

## Updating stubs

1. Run modern PHP version
2. Clone this repository and `cd` into it
3. Download the latest source from your [FacetWP](https://facetwp.com/my-account/) account and extract the zip in `source/facetwp` directory. You can also download the zip and save it as `source/facetwp.zip`.
4. Run `./release-latest-versions.sh`
This will automaticly update `facetwp-stubs.php` per version, tag and commit it.
