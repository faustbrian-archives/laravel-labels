# Laravel Labels

[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-labels)](https://packagist.org/packages/kodekeep/laravel-labels)
[![Software License](https://badgen.net/packagist/license/kodekeep/laravel-labels)](https://packagist.org/packages/kodekeep/laravel-labels)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-labels/run-tests?label=tests)](https://github.com/kodekeep/laravel-labels/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/laravel-labels)](https://codeclimate.com/github/kodekeep/laravel-labels)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/laravel-labels)](https://codeclimate.com/github/kodekeep/laravel-labels)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-labels)](https://packagist.org/packages/kodekeep/laravel-labels)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides associations for labels and Laravel Eloquent Models.

## Installation

```bash
composer require kodekeep/laravel-labels
```

## Usage

``` php
namespace App;

use KodeKeep\Labels\Concerns\HasLabels;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasLabels;
}
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

laravelLabels is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
