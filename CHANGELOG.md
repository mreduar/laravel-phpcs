# Changelog

All notable changes to `laravel-phpcs` will be documented in this file

## 1.8.1 - 2022-11-02
- Modified rule to allow empty catches.

## 1.8.0 - 2022-10-20
- Added rule to disallow the use of variables without camel case.

## 1.7.2 - 2022-10-17
- Multiple parameters are now supported on the same line in multi-line functions.

## 1.7.1 - 2022-06-20
- Updated slevomat/coding-standard to estable version.

## 1.7.0 - 2022-06-13
- Added support to enums.
- Updated php_codesniffer to 3.7.
- Updated slevomat/coding-standard to dev-php81 to support enums.

## 1.6.0 - 2022-05-20

- [Custom sniffs](https://github.com/slevomat/coding-standard) have been added to improve the Laravel standard.
- Added `SlevomatCodingStandard.Namespaces.UnusedUses` to avoid unused uses.
- Added `SlevomatCodingStandard.Namespaces.UseFromSameNamespace` to avoid uses from same namespace.
- Added `SlevomatCodingStandard.Namespaces.AlphabeticallySortedUses` for the imports to be sorted alphabetically.
- Added `SlevomatCodingStandard.Namespaces.FullyQualifiedClassNameInAnnotation` to enforces fully qualified names of classes and interfaces in phpDocs.
- Added `SlevomatCodingStandard.PHP.UselessSemicolon` to avoid useless semicolons.
- Added `SlevomatCodingStandard.Classes.MethodSpacing` to check that there is a blank line between the methods.
- Added `SlevomatCodingStandard.Functions.ArrowFunctionDeclaration` to check that the number of spaces after and before the arrow is correct.
- Added `SlevomatCodingStandard.Files.TypeNameMatchesFileName` to check that the type name matches the file name.

## 1.5.0 - 2022-04-05

- Added `Generic.NamingConventions.CamelCapsFunctionName` to avoid function names with `snake_case`
- Added new rule `Generic.Formatting.SpaceAfterNot`

## 1.4.0 - 2022-03-15

- Added rule to prefer single quotation marks

## 1.3.1 - 2022-02-20

- Now the Providers code is checked

## 1.3.0 - 2022-02-12

- Deleted illuminate/support dependency to make the package compatible with any version of Laravel

## 1.2.0 - 2022-01-27

- Added optional git pre-hook to validate with phpcs before every commit.

## 1.1.0 - 2022-01-26

- Excluded route files for Generic.CodeAnalysis.UnusedFunctionParameter rule.

## 1.0.0 - 2022-01-25

- initial release
