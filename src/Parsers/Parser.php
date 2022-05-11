<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Exceptions\EmptyArrayException;

abstract class Parser
{
    protected array $data;
    protected int $id;

    public function __construct($data, $id)
    {
        $this->data = $data;
        $this->id = $id;
    }

    protected function getPdoOptions(): array
    {
        return [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
    }

    protected function getPdoData(string $dsn, array $credentials, string $table, string $column): array
    {
        try {
            $dbh = new PDO($dsn, $credentials['username'], $credentials['password'], $this->getPdoOptions());
            $sth = $dbh->prepare('SELECT ' . $column . ' FROM ' . $table);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $sth->execute();

        foreach ($sth->fetchAll() as $element) {
            $this->data[] = $element[$column];
        }

        return $this->data;
    }

    protected function enumerate(): int
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
            $this->id += 1;
        }
    }
}
