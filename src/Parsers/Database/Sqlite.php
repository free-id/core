<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Contracts\SqliteDatabase;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Sqlite extends BaseParser implements SqliteDatabase
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
        int $start_id = 1,
        array $data = []
    ) {
        $this->path = $path;
        $this->table = $table;
        $this->column = $column;
        $this->id = $start_id;
        $this->data = $data;
    }

    public function find(): int
    {
        try {
            $dbh = new PDO(
                'sqlite:' . $this->path,
                options: $this->getPdoOptions(),
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $this->data = $this->select($dbh, $this->table, $this->column);

        return $this->enumerate($this->data, $this->id);
    }
}
