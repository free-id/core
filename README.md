<h1 align="center">
    <img alt="test" src="https://raw.githubusercontent.com/vitkuz573/free-id/main/.github/images/xml_parser.gif"/></br>
  Free ID
</h1>

<p align="center">Have you often had to get a free ID in your project? Now this action is much easier with this package!</p>
<p align="center">This package is designed for easy and flexible getting free ID in files, databases, etc.</p>

<p align="center">
    <a href="https://php.net" target="_blank"><img src="https://img.shields.io/badge/PHP-8.1+-00ADD8?style=for-the-badge&logo=php" alt="php version"/></a>
    &nbsp;
    <a href="https://packagist.org/packages/vitkuz573/free-id" target="_blank"><img src="https://img.shields.io/packagist/v/vitkuz573/free-id?style=for-the-badge" alt="packagist release"/></a>
    &nbsp;
    <a href="https://packagist.org/packages/vitkuz573/free-id" target="_blank"><img src="https://img.shields.io/packagist/dt/vitkuz573/free-id?style=for-the-badge" alt="packagist downloads"/></a>
    &nbsp;
    <a href="https://github.com/vitkuz573/free-id/blob/main/LICENSE" target="_blank"><img src="https://img.shields.io/badge/license-mit-red?style=for-the-badge&logo=none" alt="license"/></a>
</p>

## ⚡️ Quick start

Install the package using Composer
```bash
composer require vitkuz573/free-id
```

##  💡 Usage

### File

#### XML

```php
<?php

use Vitkuz573\FreeId\Parsers\File\Xml;

$free_id = new Xml('test.xml', 'node');
echo $free_id->find();

$free_id = new Xml('test.xml', 'node', 'other_id', '10');
echo $free_id->find();
```

#### Json

```php
<?php

use Vitkuz573\FreeId\Parsers\File\Json;

$free_id = new Json('test.json', 'nodes');
echo $free_id->find();

$free_id = new Json('test.json', 'nodes', 'other_id', '10');
echo $free_id->find();
```

### Database

#### MySQL
```php
<?php

use Vitkuz573\FreeId\Parsers\Database\MySql;

$free_id = new MySql('127.0.0.1', 'test', 'items', ['username' => 'root', 'password' => '']);
echo $free_id->find();
```

#### SQLite
```php
<?php

use Vitkuz573\FreeId\Parsers\Database\Sqlite;

$free_id = new Sqlite('db.sqlite3', 'items');
echo $free_id->find();
```

## 🆑 Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## 🚩 Testing

```bash
composer test
```

## 👋 Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details and a todolist.

## 🔐 Security

If you discover any security related issues, please email [vitkuz573@gmail.com](mailto:vitkuz573@gmail.com) instead of using the issue tracker.

## ✌️ Credits

- [Vitaly Kuzyaev][link-author]
- [All Contributors][link-contributors]

## ⚠️ License

`Free ID` is free and open-source software licensed under the [MIT](https://github.com/vitkuz573/free-id/blob/main/LICENSE).

## 🗃️ Other

My other packages can be found in the following [repository](https://github.com/vitkuz573/composer_packages)

[ico-version]: https://img.shields.io/packagist/v/vitkuz573/free-id.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/vitkuz573/free-id.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/vitkuz573/free-id
[link-downloads]: https://packagist.org/packages/vitkuz573/free-id
[link-author]: https://github.com/vitkuz573
[link-contributors]: ../../contributors
