[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

# Free ID

Package to get a free id (for example: in XML)

## Installation

1) Install the package using Composer
```bash
composer require vitkuz573/free-id
```

## Usage

```php
<?php

use Vitkuz573\FreeId\Xml;

$free_id = new Xml();

$free_id('test.xml', 'node', 'other_id', '10');
$free_id('test.xml', 'node');
```

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details and a todolist.

## Security

If you discover any security related issues, please email [vitkuz573@gmail.com](mailto:vitkuz573@gmail.com) instead of using the issue tracker.

## Credits

- [Vitaly Kuzyaev][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](LICENSE) for more information.

## Other

My other packages can be found in the following [repository](https://github.com/vitkuz573/composer_packages)

[ico-version]: https://img.shields.io/packagist/v/vitkuz573/free-id.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/vitkuz573/free-id.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/vitkuz573/free-id
[link-downloads]: https://packagist.org/packages/vitkuz573/free-id
[link-author]: https://github.com/vitkuz573
[link-contributors]: ../../contributors
