<?php

declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';

use Vitkuz573\FreeId\Parsers\Database\MySql;
use Vitkuz573\FreeId\Parsers\Database\Sqlite;
use Vitkuz573\FreeId\Parsers\File\Json;
use Vitkuz573\FreeId\Parsers\File\Xml;

const HOST = '127.0.0.1';
const DATABASE = 'test';
const TABLE = 'items';
const CREDENTIALS = ['username' => 'root', 'password' => 'root'];

$xml = new Xml(__DIR__ . '/../tests/files/test.xml', 'node');
echo 'Free ID (XML): ' . $xml->find() . PHP_EOL;

$json = new Json(__DIR__ . '/../tests/files/test.json', 'nodes');
echo 'Free ID (JSON): ' . $json->find() . PHP_EOL;

$mysql = new MySql(HOST, DATABASE, TABLE, CREDENTIALS);
echo 'Free ID (MySQL): ' . $mysql->find() . PHP_EOL;

$sqlite = new Sqlite('test.sqlite3', 'items', 'identifier');
echo 'Free ID (SQLite): ' . $sqlite->find() . PHP_EOL;
