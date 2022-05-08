<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Contracts;

interface Database
{
    public function __construct(
        string $host,
        string $db,
        string $table,
        array $credentials,
        string $column = 'id',
        string $charset = 'utf8',
        int $id = 1,
        array $data = [],
    );

    public function find(): int;
}
