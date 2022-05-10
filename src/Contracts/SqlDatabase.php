<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Contracts;

interface SqlDatabase
{
    public function __construct(
        string $host,
        string $port,
        string $db,
        string $table,
        array $credentials,
        string $column = 'id',
        string $charset = 'utf8',
        int $start_id = 1,
    );

    public function find(): int;
}
