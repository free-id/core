<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

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
        $this->data = $this->getPdoData(
            'sqlite:' . $this->path,
            ['username' => null, 'password' => null],
            $this->table,
            $this->column
        );

        return $this->enumerate($this->data, $this->id);
    }
}
