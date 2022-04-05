# Changelog

All notable changes to `laravel-phpcs` will be documented in this file

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
