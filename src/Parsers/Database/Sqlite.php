<?php

namespace Vitkuz573\FreeId\Parsers\Database;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Contracts\NoSqlDatabase;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Sqlite extends BaseParser implements NoSqlDatabase
{
    private string $path;
    private string $table;
    private string $column;
    private int $id;
    private array $data;

    public function __construct(
        string $path,
        string $table,
        string $column = 'id',
        int $id = 1,
        array $data = []
    ) {
        $this->path = $path;
        $this->table = $table;
        $this->column = $column;
        $this->id = $id;
        $this->data = $data;
    }

    public function find(): int
    {
        $dsn = 'sqlite:' . $this->path;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $dbh = new PDO($dsn);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        try {
            $sth = $dbh->prepare('SELECT ' . $this->column . ' FROM ' . $this->table);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        $sth->execute();

        foreach ($sth->fetchAll() as $element) {
            $this->data[] = $element[$this->column];
        }

        return $this->enumerate($this->data, $this->id);
    }
}
