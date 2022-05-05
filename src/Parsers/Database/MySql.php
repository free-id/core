<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Contracts\Database;

class MySql implements Database
{
    /**
     * @inheritDoc
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
    ): int {
        $dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $dbh = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        $id = $start_id;

        $elements = [];

        $sth = $dbh->prepare('SELECT ' . $column . ' FROM ' . $table);
        $sth->execute();

        foreach ($sth->fetchAll() as $element) {
            foreach ($element as $identifier) {
                $elements[] = (int) $identifier;
            }
        }

        while (true) {
            if (! in_array($id, $elements)) {
                return $id;
            }
            $id = $id + 1;
        }
    }
}
