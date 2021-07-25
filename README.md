# Laravel Labels

[![Latest Version](https://badgen.net/packagist/v/konceiver/laravel-labels)](https://packagist.org/packages/konceiver/laravel-labels)
[![Software License](https://badgen.net/packagist/license/konceiver/laravel-labels)](https://packagist.org/packages/konceiver/laravel-labels)
[![Build Status](https://img.shields.io/github/workflow/status/konceiver/laravel-labels/run-tests?label=tests)](https://github.com/konceiver/laravel-labels/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/konceiver/laravel-labels)](https://codeclimate.com/github/konceiver/laravel-labels)
[![Quality Score](https://badgen.net/codeclimate/maintainability/konceiver/laravel-labels)](https://codeclimate.com/github/konceiver/laravel-labels)
[![Total Downloads](https://badgen.net/packagist/dt/konceiver/laravel-labels)](https://packagist.org/packages/konceiver/laravel-labels)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides associations for labels and Laravel Eloquent Models.

## How Do Labels Differ From Tags?

This packages was extracted from a production application and differs from tags in terms of how they are meant to be used.

### Tags

Tags are reusable phrases that are stored in the database and might initially not be attached to a specific entity as they can be stored in the database without any relationships. These relationships can be later on created through polymorphism and relationships like `morphToMany` which allow you to attach the same tags to multiple entities which don't need to be restricted to a specific entity.

### Labels

Labels are similar to Tags but have a few key differences. The first being that they are not just a phrase but contain additional information like a description and color, think of them like those small badges you can add in your todo app to organise things. The second and more important difference is that they aren't intended to be reusable across an application and instead are bound to a specific entity.

The application from which this behaviour was extracted has entities that have labels and those labels are used for child resources to perform tasks based on them. The names, descriptions and colors of these labels are not enforced to be unique which means they can't be stored once and reused across the whole application like with tags. There could be hundreds of projects that have the same label names like "Work" and "Hobby" with the only difference being the color which would make the database structure more complex if we would want to store those labels in a single table and attach them to multiple projects instead of specifically creating those labels for a project.

**TLDR: Labels are non-reusable tags with some sugar and are limited to a specific entity.**

> See [spatie/laravel-tags](https://github.com/spatie/laravel-tags) if your use-case requires reusable tags.

## Installation

```bash
composer require konceiver/laravel-labels
```

## Usage

``` php
namespace App;

use Konceiver\Labels\Concerns\HasLabels;
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

If you discover a security vulnerability within this package, please send an e-mail to hello@konceiver.dev. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

laravelLabels is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
