<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Concerns;

use PDO;

trait Database
{
    /**
     * @return array<int, int|bool>
     */
    final protected function getOptions()
    {
        return [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_COLUMN,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
    }

    /**
     * @param array{username: string|null, password: string|null} $credentials
     * @return array<int, int>
     */
    final protected function getData(string $dsn, array $credentials, string $table, string $column): array
    {
        $dbh = new PDO($dsn, $credentials['username'], $credentials['password'], $this->getOptions());
        $sth = $dbh->query('SELECT ' . $column . ' FROM ' . $table);

        $sth !== false ?: die();

        return $sth->fetchAll();
    }
}
