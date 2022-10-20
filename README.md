# PHP Codesniffer ruleset to follow Laravel's coding style

[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![PR friendly repository](https://img.shields.io/badge/Pull--Request-are%20welcome!-ff69b4)](/compare)

[php codesniffer](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Annotated-Ruleset) ruleset for laravel or any other php projects.

## Installation
**[*]** Install using composer

```bash
composer require mreduar/laravel-phpcs --dev
```

**[*]** Install manually

1. Copy the `phpcs.xml` file into your project root.
2. Descoment lines `<file>app</file>` and the others in `phpcs.xml` file.
3. Because this package uses third party standards that are not in phpcs you need to install these package.
   1. `composer require slevomat/coding-standard`
4. Run `phpcs .` to check your project.

## Usage

### Enabling the rules

> Only neccesary if you installed as a package using composer!

`php artisan vendor:publish --provider="Mreduar\LaravelPhpcs\LaravelPhpcsServiceProvider" --tag="ruleset"`

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

Optionally you can also publish a git hook that will help you to never overlook smelly code.

`php artisan vendor:publish --provider="Mreduar\LaravelPhpcs\LaravelPhpcsServiceProvider" --tag="hook"`

The file will be published in its root directory `.git/hooks/pre-commit`
So every time you try to commit `phpcs` will first check that you have everything correct.

```bash
$ git commit -m "test"
[1/1] code sniffer        OK!
[master a6133d7] test
 1 file changed, 1 insertion(+), 1 deletion(-)
```

if you have any errors the commit will be cancelled.


### Sniffing code
Use php CodeSniffer commands, pointed towards your xml file, to sniff the code
using the new ruleset.

`vendor/bin/phpcs`
`vendor/bin/phpcbf`

#### Sniffing code in PHPStorm

See [PHP Code Sniffer in PhpStorm](https://confluence.jetbrains.com/display/PhpStorm/PHP+Code+Sniffer+in+PhpStorm) on how to set up CodeSniffer in PHPStorm.

#### Sniffing code Visual Studio Code

See [PHP Sniffer by wongjn](https://marketplace.visualstudio.com/items?itemName=wongjn.php-sniffer) or other [phpcs](https://marketplace.visualstudio.com/search?term=phpcs&target=VSCode&category=All%20categories&sortBy=Relevance) plugins for more information about PHP Code Sniffer in Visual Studio Code.

--------------------------------------------------------------------------------


## Contributing

All changes that makes the sniffer more accurate towards _Laravel_'s coding standard
is always highly appreciated and welcome.

Please see [CONTRIBUTING](CONTRIBUTING.md) for more details.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
