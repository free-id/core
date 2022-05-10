<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Exceptions\ElementsNotFoundException;

class Parser
{
    protected array $data;
    protected array $elements;

    public function __construct($data, $elements)
    {
        $this->data = $data;
        $this->elements = $elements;
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

    protected function enumerate(array $data, int $id): int
    {
        foreach ($data as $element) {
            $this->elements[] = (int) $element;
        }

        try {
            if (empty($this->elements)) {
                throw new ElementsNotFoundException();
            }
        } catch (ElementsNotFoundException $e) {
            die($e->getMessage());
        }

        while (true) {
            if (! in_array($id, $this->elements)) {
                return $id;
            }
            $id += 1;
        }
    }
}
