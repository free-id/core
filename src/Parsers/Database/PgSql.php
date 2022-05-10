<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use Vitkuz573\FreeId\Contracts\SqlDatabase;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class PgSql extends BaseParser implements SqlDatabase
{
    private string $host;
    private string $port;
    private string $db;
    private string $table;
    private array $credentials;
    private string $column;
    private int $id;
    protected array $data;
    protected array $elements;

    public function __construct(
        string $host,
        string $port,
        string $db,
        string $table,
        array  $credentials,
        string $column = 'id',
        string $charset = null,
        int    $start_id = 1,
    ) {
        $this->host = $host;
        $this->port = $port;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->id = $start_id;
        $this->data = [];
        $this->elements = [];
        parent::__construct($this->data, $this->elements);
    }

    public function find(): int
    {
        $this->data = $this->getPdoData(
            'pgsql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db,
            $this->credentials,
            $this->table,
            $this->column
        );

        return $this->enumerate($this->data, $this->id);
    }
}
