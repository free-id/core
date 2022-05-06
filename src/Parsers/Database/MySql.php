<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Contracts\Database;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class MySql extends BaseParser implements Database
{
    private string $host;
    private string $db;
    private string $table;
    private array $credentials;
    private string $column;
    private string $charset;
    private int $start_id;

    public function __construct(
        string $host,
        string $db,
        string $table,
        array $credentials,
        string $column = 'id',
        string $charset = 'utf8',
        int $start_id = 1
    ) {
        $this->host = $host;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->charset = $charset;
        $this->start_id = $start_id;
    }

    public function search(): int
    {
        $dsn = 'mysql:host=' . $this->host. ';dbname=' . $this->db . ';charset=' . $this->charset;
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

        $id = $this->start_id;

        $elements = [];

        $sth = $dbh->prepare('SELECT ' . $this->column . ' FROM ' . $this->table);
        $sth->execute();

        foreach ($sth->fetchAll() as $element) {
            foreach ($element as $identifier) {
                $elements[] = (int) $identifier;
            }
        }

        return $this->traversing($id, $elements);
    }
}
