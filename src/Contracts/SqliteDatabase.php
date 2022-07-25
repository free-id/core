<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Core\Contracts;

interface SqliteDatabase
{
    public function __construct(
        string $path,
        string $table,
        string $column = 'id',
        int $start_id = 1,
    );

    public function find(): int;
}
