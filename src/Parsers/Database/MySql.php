<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Contracts\Database;
use Vitkuz573\FreeId\Exceptions\ElementsNotFoundException;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class MySql extends BaseParser implements Database
{
    private string $host;
    private string $db;
    private string $table;
    private array $credentials;
    private string $column;
    private string $charset;
    private int $id;
    private array $data;

    public function __construct(
        string $host,
        string $db,
        string $table,
        array  $credentials,
        string $column = 'id',
        string $charset = 'utf8',
        int    $id = 1,
        array  $data = [],
    ) {
        $this->host = $host;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->charset = $charset;
        $this->id = $id;
        $this->data = $data;
    }

    public function find(): int
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=' . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $dbh = new PDO($dsn, $this->credentials['username'], $this->credentials['password'], $options);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        $sth = $dbh->prepare('SELECT ' . $this->column . ' FROM ' . $this->table);
        $sth->execute();

        foreach ($sth->fetchAll() as $element) {
            $this->data[] = $element[$this->column];
        }

        return $this->enumerate($this->data, $this->id);
    }
}
