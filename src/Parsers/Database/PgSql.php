<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\Database;

use Vitkuz573\FreeId\Concerns\Database;
use Vitkuz573\FreeId\Contracts\SqlDatabase as SqlDatabaseContract;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class PgSql extends BaseParser implements SqlDatabaseContract
{
    use Database;

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
        parent::__construct([], $start_id);
        $this->host = $host;
        $this->port = $port;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->charset = $charset;
    }

    public function find(): int
    {
        $this->data = $this->getData(
            'pgsql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db . ';options=\'--client_encoding=' . $this->charset . '\'',
            $this->credentials,
            $this->table,
            $this->column,
        );

        return $this->enumerate();
    }
}
