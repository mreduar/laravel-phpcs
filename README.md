# PHP Codesniffer ruleset to follow Laravel's coding style

[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![PR friendly repository](https://img.shields.io/badge/Pull--Request-are%20welcome!-ff69b4)](/compare)

[php codesniffer](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Annotated-Ruleset) ruleset for laravel or any oher php projects.

## Requirements

- PHP 7.3 or higher, as Laravel 8.x is using ^7.3|^8.0

## Installation
**[*]** Install using composer

```bash
composer require mreduar/laravel-phpcs --dev
```

**[*]** Install manually

1. Copy the `phpcs.xml` file into your project root.
2. Descoment lines `<file>app</file>` and the others in `phpcs.xml` file.
3. Run `phpcs .` to check your project.

## Usage

### Enabling the rules

> Only neccesary if you installed as a package using composer!

`php artisan vendor:publish --provider="Mreduar\LaravelPhpcs\LaravelPhpcsServiceProvider"`

This will publish to your root directory the following file

```xml
<?xml version="1.0"?>
<ruleset>
    <arg name="basepath" value="."/>

    <file>./app</file>
    <file>./config</file>
    <file>./resources</file>
    <file>./routes</file>
    <file>./tests</file>

    <rule ref="./vendor/mreduar/laravel-phpcs/phpcs.xml"/>
</ruleset>
```

### Sniffing code
Use php CodeSniffer commands, pointed towards your xml file, to sniff the code
using the new ruleset.

`vendor/bin/phpcs`
`vendor/bin/phpcbf`

--------------------------------------------------------------------------------


## Contributing

All changes that makes the sniffer more accurate towards _Laravel_'s coding standard
is always highly appreciated and welcome.

Please see [CONTRIBUTING](docs/CONTRIBUTING.md) for more details.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
