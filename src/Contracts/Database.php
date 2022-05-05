<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Contracts;

interface Database
{
    /**
     * Get free ID in the database table
     */
    public function __invoke(
        string $host,
        string $db,
        string $table,
        string $user,
        string $password,
        string $column = 'id',
        string $charset = 'utf8',
        int $start_id = 1
    ): int;
}
