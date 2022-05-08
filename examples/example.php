<?php

include "vendor/autoload.php";

use Vitkuz573\FreeId\Parsers\Database\MySql;
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
