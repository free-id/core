<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use Vitkuz573\FreeId\Concerns\Database;
use Vitkuz573\FreeId\Contracts\SqliteDatabase as SqliteDatabaseContract;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Sqlite extends BaseParser implements SqliteDatabaseContract
{
    use Database;

    public function __construct(
        string $path,
        string $table,
        string $column = 'id',
        int $start_id = 1,
    ) {
        parent::__construct([], $start_id);
        $this->path = $path;
        $this->table = $table;
        $this->column = $column;
    }

    public function find(): int
    {
        $this->data = $this->getData(
            'sqlite:' . $this->path,
            ['username' => null, 'password' => null],
            $this->table,
            $this->column,
        );

        return $this->enumerate();
    }
}
