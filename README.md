# Olympus Hades Error Handle ![PHP Version][php-image]
> **Olympus Hades Error Handler** is a bundle used to handle all Olympus errors from your WordPress website and its plugins.

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]
[![Travis Status][travis-image]][travis-url]

## Features

+ Better and secure folder structure
+ Dependency management with [**Composer**](https://getcomposer.org)
+ Seldaek [**Monolog**](https://github.com/seldaek/monolog) component
+ Symfony [**Error handler**](https://github.com/symfony/error-handler) component

![With Composer](https://img.shields.io/badge/with-Composer-885630.svg?style=flat-square)

## Installation

Using `composer` in your PHP project:

```sh
composer require getolympus/olympus-hades-error-handler
```

## Initialization

To initialize Hades, you'll need to extend the main class before all:
```php
namespace MyCustomPackage;

use GetOlympus\Hades\Hades;

class ErrorDebugger extends Hades
{
}

```

Once done, simple initiate your custom class and register handlers:

```php
/**
 * Use the ErrorDebugger to display errors
 */
$err = ErrorDebugger::register([
    'debug' => WP_DEBUG,
    'level' => WP_DEBUG ? 500 : 100,
    'logs'  => 'my/custom/logs/folder/',
    'title' => 'My custom handler title',
]);
```

## Release History

See [**CHANGELOG.md**][changelog-blob] for all details.

## Authors and Copyright

Achraf Chouk  
[![@crewstyle][twitter-image]][twitter-url]

[https://github.com/crewstyle](https://github.com/crewstyle)  
[http://fr.linkedin.com/in/achrafchouk](http://fr.linkedin.com/in/achrafchouk)

Please, read [![MIT][license-image]][license-blob] for more information.

## Contributing

1. Fork it (<https://github.com/GetOlympus/Hades-Error-Handler/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](http://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[changelog-blob]: https://github.com/GetOlympus/Hades-Error-Handler/blob/master/CHANGELOG.md
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/Hades-Error-Handler/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/Hades-Error-Handler
[license-blob]: https://github.com/GetOlympus/Hades-Error-Handler/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-Hades-Error-Handler.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-Hades-Error-Handler
[php-image]: https://img.shields.io/travis/php-v/GetOlympus/Hades-Error-Handler.svg?style=flat-square
[travis-image]: https://img.shields.io/travis/GetOlympus/Hades-Error-Handler/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/GetOlympus/Hades-Error-Handler
[twitter-image]: https://img.shields.io/badge/crewstyle-blue.svg?style=social&logo=twitter
[twitter-url]: http://twitter.com/crewstyle
