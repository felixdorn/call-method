# Call Method

[![Tests](https://github.com/felixdorn/call-method/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/felixdorn/call-method/actions/workflows/tests.yml)
[![Formats](https://github.com/felixdorn/call-method/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/felixdorn/call-method/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/felixdorn/call-method/version)](//packagist.org/packages/felixdorn/call-method)
[![Total Downloads](https://poser.pugx.org/felixdorn/call-method/downloads)](//packagist.org/packages/felixdorn/call-method)
[![License](https://poser.pugx.org/felixdorn/call-method/license)](//packagist.org/packages/felixdorn/call-method)

## Installation

> Requires [PHP 8.0.0+](https://php.net/releases)

You can install the package via composer:

```bash
composer require felixdorn/call-method
```

## Usage

```php
class BladeViewCompiler {
    protected function compileComponentString(string $value): string {
        return $value;
    }
}

$compiler = new BladeViewCompiler();

call($compiler, 'compileComponentString', 'value'); // returns "value"
```

## Testing

```bash
composer test
```

**call-method** was created by **[Félix Dorn](https://twitter.com/afelixdorn)** under
the **[MIT license](https://opensource.org/licenses/MIT)**.
