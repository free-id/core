<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers;

use PDO;
use PDOException;
use Vitkuz573\FreeId\Exceptions\ElementsNotFoundException;

class Parser
{
    protected array $elements;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    protected function select(PDO $dbh, string $table, string $column, array $data = []): array
    {
        try {
            $sth = $dbh->prepare('SELECT ' . $column . ' FROM ' . $table);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        $sth->execute();

        foreach ($sth->fetchAll() as $element) {
            $data[] = $element[$column];
        }

        return $data;
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
