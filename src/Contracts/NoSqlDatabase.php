<?php

namespace Vitkuz573\FreeId\Contracts;

interface NoSqlDatabase
{
    public function __construct(
        string $path,
        string $table,
        string $column = 'id',
        int $id = 1,
        array $data = [],
    );

    public function find(): int;
}
