<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Contracts\SqlDatabase;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class MySql extends BaseParser implements SqlDatabase
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
        int    $start_id = 1,
        array  $data = [],
    ) {
        $this->host = $host;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->charset = $charset;
        $this->id = $start_id;
        $this->data = $data;
    }

    public function find(): int
    {
        try {
            $dbh = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=' . $this->charset,
                $this->credentials['username'],
                $this->credentials['password'],
                $this->getPdoOptions(),
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $this->data = $this->select($dbh, $this->table, $this->column);

        return $this->enumerate($this->data, $this->id);
    }
}
