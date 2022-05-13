<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers;

use PDO;
use Vitkuz573\FreeId\Exceptions\EmptyArrayException;

abstract class Parser
{
    /** @var array<int, int> */
    protected array $data;
    protected int $id;

    /**
     * @param array<int> $data
     */
    public function __construct(array $data, int $id)
    {
        $this->data = $data;
        $this->id = $id;
    }

    /**
     * @return array<int, int|bool>
     */
    final protected function getPdoOptions()
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
    final protected function getPdoData(string $dsn, array $credentials, string $table, string $column): array
    {
        $dbh = new PDO($dsn, $credentials['username'], $credentials['password'], $this->getPdoOptions());
        $sth = $dbh->query('SELECT ' . $column . ' FROM ' . $table);

        $sth !== false ?: die();

        return $sth->fetchAll();
    }

    final protected function enumerate(): int
    {
        try {
            if (empty($this->data)) {
                throw new EmptyArrayException('Elements not found!');
            }
        } catch (EmptyArrayException $e) {
            die($e->getMessage());
        }

        while (true) {
            if (! in_array($this->id, $this->data)) {
                return $this->id;
            }
            ++$this->id;
        }
    }
}
