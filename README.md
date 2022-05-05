[![Latest Stable Version](http://poser.pugx.org/vitkuz573/free-id/v)](https://packagist.org/packages/vitkuz573/free-id) [![Total Downloads](http://poser.pugx.org/vitkuz573/free-id/downloads)](https://packagist.org/packages/vitkuz573/free-id) [![Latest Unstable Version](http://poser.pugx.org/vitkuz573/free-id/v/unstable)](https://packagist.org/packages/vitkuz573/free-id) [![License](http://poser.pugx.org/vitkuz573/free-id/license)](https://packagist.org/packages/vitkuz573/free-id) [![PHP Version Require](http://poser.pugx.org/vitkuz573/free-id/require/php)](https://packagist.org/packages/vitkuz573/free-id)
[![PHP Composer](https://github.com/vitkuz573/free-id/actions/workflows/php.yml/badge.svg)](https://github.com/vitkuz573/free-id/actions/workflows/php.yml)

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

## Other

Other packages can be found in the repository: https://github.com/vitkuz573/composer_packages
