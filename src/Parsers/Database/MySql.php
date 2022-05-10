<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use Vitkuz573\FreeId\Contracts\SqlDatabase;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class MySql extends BaseParser implements SqlDatabase
{
    private string $host;
    private string $port;
    private string $db;
    private string $table;
    private array $credentials;
    private string $column;
    private string $charset;
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
        string $charset = 'utf8',
        int    $start_id = 1,
    ) {
        $this->host = $host;
        $this->port = $port;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->charset = $charset;
        $this->id = $start_id;
        $this->data = [];
        $this->elements = [];
        parent::__construct($this->data, $this->elements);
    }

    public function find(): int
    {
        $this->data = $this->getPdoData(
            'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db . ';charset=' . $this->charset,
            $this->credentials,
            $this->table,
            $this->column
        );

        return $this->enumerate($this->data, $this->id);
    }
}
