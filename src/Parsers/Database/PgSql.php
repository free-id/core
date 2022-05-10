<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use Vitkuz573\FreeId\Contracts\SqlDatabase;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class PgSql extends BaseParser implements SqlDatabase
{
    private string $host;
    private string $db;
    private string $table;
    private array $credentials;
    private string $column;
    private int $id;
    private array $data;

    public function __construct(
        string $host,
        string $db,
        string $table,
        array  $credentials,
        string $column = 'id',
        string $charset = null,
        int    $start_id = 1,
        array  $data = [],
    ) {
        $this->host = $host;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->id = $start_id;
        $this->data = $data;
    }

    public function find(): int
    {
        $this->data = $this->getPdoData(
            'pgsql:host=' . $this->host . ';dbname=' . $this->db,
            $this->credentials,
            $this->table,
            $this->column
        );

        return $this->enumerate($this->data, $this->id);
    }
}
