<?php

declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';

use Vitkuz573\FreeId\Parsers\Database\MySql;
use Vitkuz573\FreeId\Parsers\Database\Sqlite;
use Vitkuz573\FreeId\Parsers\File\Json;
use Vitkuz573\FreeId\Parsers\File\Xml;

const MYSQL_HOST = '127.0.0.1';
const MYSQL_DATABASE = 'test';
const MYSQL_TABLE = 'items';
const MYSQL_CREDENTIALS = ['username' => 'root', 'password' => 'root'];

const SQLITE_DATABASE = 'test.sqlite3';
const SQLITE_TABLE = 'items';

$xml = new Xml(__DIR__ . '/../tests/files/test.xml', 'node');
echo 'Free ID (XML): ' . $xml->find() . PHP_EOL;

$json = new Json(__DIR__ . '/../tests/files/test.json', 'nodes');
echo 'Free ID (JSON): ' . $json->find() . PHP_EOL;

$mysql = new MySql(MYSQL_HOST, MYSQL_DATABASE, MYSQL_TABLE, MYSQL_CREDENTIALS);
echo 'Free ID (MySQL): ' . $mysql->find() . PHP_EOL;

$sqlite = new Sqlite(SQLITE_DATABASE, SQLITE_TABLE);
echo 'Free ID (SQLite): ' . $sqlite->find() . PHP_EOL;
